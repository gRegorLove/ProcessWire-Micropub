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
    'token_endpoint' => [
        'type' => 'URL',
        'label' => 'External token endpoint',
        'description' => 'If you are using an external token endpoint (not IndieAuth for ProcessWire), enter the full URL',
    ],
];

