<?php
/**
 * Copyright © FATCHIP GmbH. All rights reserved.
 * See LICENSE file for license details.
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

$aModule = [
    'id' => 'fcyellowmapac',
    'title' => 'FATCHIP Modul YellowMap Address Autocomplete',
    'description' => [
        'de' => 'Integration von SmartMaps Autovervollständigung',
        'en' => 'Integration of SmartMaps Autocomplete',
    ],
    'version' => '1.0.1',
    'author' => 'FATCHIP GmbH',
    'email' => 'support@fatchip.de',
    'url' => '',
    'thumbnail' => 'SmartMaps_poweredbyYM.svg',
    'extend' => [],
    'controllers' => [],
    'templates' => [],
    'settings'   => [
        [
            'group' => 'fcyellowmapac_settings',
            'name' => 'sFcYellowmapAcApiKey',
            'type' => 'str',
            'value' => ''
        ]
    ],
    'blocks' => [
        [
            'template' => 'form/user_checkout_noregistration.tpl',
            'block'    => 'user_checkout_noregistration_next_step_top',
            'file'     => 'Application/views/blocks/yellowmap_script.tpl',
        ],
        [
            'template' => 'form/user_checkout_change.tpl',
            'block'    => 'user_checkout_change_next_step_top',
            'file'     => 'Application/views/blocks/yellowmap_script.tpl',
        ],
        [
            'template' => 'form/user.tpl',
            'block'    => 'user_form',
            'file'     => 'Application/views/blocks/yellowmap_script.tpl',
        ],
        [
            'template' => 'form/fieldset/user_account.tpl',
            'block'    => 'user_account_newsletter',
            'file'     => 'Application/views/blocks/yellowmap_script.tpl',
        ],
    ],
    'events' => [],
];
