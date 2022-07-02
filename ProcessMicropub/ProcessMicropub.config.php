<?php
/**
 * Module configuration
 *
 * @author gRegor Morrill, https://gregorlove.com
 * @copyright 2021 gRegor Morrill
 * @license https://opensource.org/licenses/MIT MIT
 */

declare(strict_types=1);

namespace ProcessWire;

$config = [
    'publish_posts' => [
        'type' => 'checkbox',
        'label' => 'Publish posts immediately',
        'description' => 'If this option is not enabled, pages will be created with unpublished status. You can then manually publish the page to make it public.',
    ],
    'default_template' => [
        'type' => 'text',
        'label' => 'Default template',
        'value' => 'basic-page',
        'required' => true,
    ],
    'note_template' => [
        'type' => 'text',
        'label' => 'Note post template',
        'description' => 'Page template for note posts, if different than the default',
        'collapsed' => Inputfield::collapsedBlank,
    ],
    'article_template' => [
        'type' => 'text',
        'label' => 'Article post template',
        'description' => 'Page template for article posts, if different than the default',
        'collapsed' => Inputfield::collapsedBlank,
    ],
    'reply_template' => [
        'type' => 'text',
        'label' => 'Reply post template',
        'description' => 'Page template for reply posts, if different than the default',
        'collapsed' => Inputfield::collapsedBlank,
    ],
    'like_template' => [
        'type' => 'text',
        'label' => 'Like post template',
        'description' => 'Page template for like posts, if different than the default',
        'collapsed' => Inputfield::collapsedBlank,
    ],
    'rsvp_template' => [
        'type' => 'text',
        'label' => 'RSVP post template',
        'description' => 'Page template for RSVP posts, if different than the default',
        'collapsed' => Inputfield::collapsedBlank,
    ],
    'bookmark_template' => [
        'type' => 'text',
        'label' => 'Bookmark post template',
        'description' => 'Page template for bookmark posts, if different than the default',
        'collapsed' => Inputfield::collapsedBlank,
    ],
    'repost_template' => [
        'type' => 'text',
        'label' => 'Repost template',
        'description' => 'Page template for reposts, if different than the default',
        'collapsed' => Inputfield::collapsedBlank,
    ],
    'photo_template' => [
        'type' => 'text',
        'label' => 'Photo post template',
        'description' => 'Page template for photo posts, if different than the default',
        'collapsed' => Inputfield::collapsedBlank,
    ],
    'video_template' => [
        'type' => 'text',
        'label' => 'Video post template',
        'description' => 'Page template for video posts, if different than the default',
        'collapsed' => Inputfield::collapsedBlank,
    ],
    'token_endpoint' => [
        'type' => 'URL',
        'label' => 'External token endpoint (Not supported yet)',
        'description' => 'If you are using an external token endpoint (not IndieAuth for ProcessWire), enter the full URL',
        'collapsed' => Inputfield::collapsedBlank,
    ],
    'verbose_logging' => [
        'type' => 'checkbox',
        'label' => 'Verbose logging',
        'description' => 'When enabled, additional information about each Micropub request and the resulting post will be saved to the log named "micropub"',
        'collapsed' => Inputfield::collapsedBlank,
    ],
    'wrap_microformat_element' => [
        'type' => 'checkbox',
        'label' => 'Advanced: Wrap posts with microformat element',
        'description' => 'When enabled, the final post body will be wrapped with a <div> element and the microformat class, e.g. <div class="h-entry">...</div>',
        'notes' => 'You most likely want this option enabled unless you are adding your own hooks to process Micropub requests and/or your page templates already include the microformat element.',
        'value' => 1,
        'collapsed' => Inputfield::collapsedBlank,
    ],
];

