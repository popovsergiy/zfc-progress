<?php
/**
 * The MIT License (MIT)
 * Copyright (c) 2018 Stagem Team
 * This source file is subject to The MIT License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/MIT
 *
 * @category Stagem
 * @package Stagem_Asin
 * @author Serhii Popov <popow.serhii@gmail.com>
 * @license https://opensource.org/licenses/MIT The MIT License (MIT)
 */
return [
    'definitions' => [
        'progress' => [
            'listener' => Stagem\ZfcProgress\Listener\ProgressListener::class,
            'method' => 'writeProgress',
            'event' => ['edit', 'change', 'sync'],
            'identifier' => '*',
            'priority' => 100,
        ],
        /*[
            'listener' => Stagem\ZfcProgress\Listener\ProgressServiceListener::class,
            'method' => 'setDefaultStatus',
            //'event' => ['write'],
            'event' => 'write',
            'identifier' => Stagem\ZfcProgress\Service\ProgressService::class,
            'priority' => 100,
        ],*/
    ],
];