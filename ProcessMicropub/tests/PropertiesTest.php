<?php

declare(strict_types=1);

namespace ProcessWire;

use PHPUnit\Framework\TestCase;

final class PropertiesTest extends TestCase
{
    private $module;

    public function setUp(): void
    {
        $this->module = wire('modules')->get('ProcessMicropub');
    }

    public function testHasProperty(): void
    {
        $this->module->setMicroformats(json_decode('{"type":["h-entry"],"properties":{"content":["lorem ipsum"]}}', true));
        $this->assertTrue($this->module->hasProperty('content'));
    }

    public function testMissingProperty(): void
    {
        $this->module->setMicroformats(json_decode('{"type":["h-entry"],"properties":{"content":["lorem ipsum"]}}', true));
        $this->assertFalse($this->module->hasProperty('name'));
    }

    public function testValidUrl(): void
    {
        $this->module->setMicroformats(json_decode('{"type":["h-entry"],"properties":{"in-reply-to":["https://example.com/"],"content":["lorem ipsum"]}}', true));
        $this->assertTrue($this->module->isPropertyValidUrl('in-reply-to'));
    }

    public function testInvalidUrl(): void
    {
        $this->module->setMicroformats(json_decode('{"type":["h-entry"],"properties":{"in-reply-to":["invalid url"],"content":["lorem ipsum"]}}', true));
        $this->assertFalse($this->module->isPropertyValidUrl('in-reply-to'));
    }

    public function testContentAndTypePlaintext(): void
    {
        $this->module->setMicroformats(json_decode('{"type":["h-entry"],"properties":{"in-reply-to":["invalid url"],"content":["lorem ipsum"]}}', true));

        $expected = [
            'type' => 'plaintext',
            'value' => 'lorem ipsum',
        ];

        $this->assertEqualsCanonicalizing($expected, $this->module->getContentAndType('content'));
    }

    public function testContentAndTypeHtml(): void
    {
        $this->module->setMicroformats(json_decode('{"type":["h-entry"],"properties":{"in-reply-to":["invalid url"],"content":[{"html":"lorem ipsum html"}]}}', true));

        $expected = [
            'type' => 'html',
            'value' => 'lorem ipsum html',
        ];

        $this->assertEqualsCanonicalizing($expected, $this->module->getContentAndType('content'));
    }

    public function testCreateContentPlaintext(): void
    {
        $this->module->setMicroformats(json_decode('{"type":["h-entry"],"properties":{"in-reply-to":["invalid url"],"content":["lorem ipsum"]}}', true));

        $page = $this->module->getPage();
        $page->template = $this->module->getPageTemplate('article_template');

        $this->module->createContent($page);

        $expected = PHP_EOL . '<p class="p-content">lorem ipsum</p>';
        $this->assertEquals($expected, $page->body);
    }
}

