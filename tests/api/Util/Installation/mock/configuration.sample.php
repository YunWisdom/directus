<?php

/**
 * High priority use case, not super planned out yet.
 * This will be useful in the future as we do a better job organizing our application configuration.
 * We need to distinguish between configuration and application constants.
 */

return [
    'session' => [
        'prefix' => 'directus6_'
    ],

    'default_language' => 'en',

    'filesystem' => [
        'adapter' => 'local',
        // By default media directory are located at the same level of directus root
        // To make them a level up outsite the root directory
        // use this instead
        // Ex: 'root' => realpath(BASE_PATH.'/../storage/uploads'),
        // Note: BASE_PATH constant doesn't end with trailing slash
        'root' => BASE_PATH . '/storage/uploads',
        // This is the url where all the media will be pointing to
        // here all assets will be (yourdomain)/storage/uploads
        // same with thumbnails (yourdomain)/storage/uploads/thumbs
        'root_url' => '/directus/storage/uploads',
        'root_thumb_url' => '/directus/storage/uploads/thumbs',
        //   'key'    => 's3-key',
        //   'secret' => 's3-key',
        //   'region' => 's3-region',
        //   'version' => 's3-version',
        //   'bucket' => 's3-bucket'
    ],

    'HTTP' => [
        'forceHttps' => false,
        'isHttpsFn' => function () {
            // Override this check for custom arrangements, e.g. SSL-termination @ load balancer
            return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off';
        }
    ],

    'mail' => [
        'transport' => 'mail',
        'from' => 'admin@directus.local'
    ],

    'cors' => [
        'enabled' => false,
        'origin' => '*',
        'headers' => [
            ['Access-Control-Allow-Headers', 'Authorization, Content-Type, Access-Control-Allow-Origin'],
            ['Access-Control-Allow-Credentials', 'false']
        ]
    ],

    'hooks' => [
        'postInsert' => function ($TableGateway, $record, $db) {

        },
        'postUpdate' => function ($TableGateway, $record, $db) {
            $tableName = $TableGateway->getTable();
            switch ($tableName) {
                // ...
            }
        }
    ],

    'feedback' => [
        'token' => 'token',
        'login' => true
    ],

    // These tables will not be loaded in the directus schema
    'tableBlacklist' => [],

    'statusMapping' => [
        0 => [
            'name' => 'Deleted',
            'text_color' => '#FFFFFF',
            'background_color' => '#F44336',
            'subdued_in_listing' => true,
            'show_listing_badge' => true,
            'hidden_globally' => true,
            'hard_delete' => false,
            'sort' => 3
        ],
        1 => [
            'name' => 'Published',
            'text_color' => '#FFFFFF',
            'background_color' => '#3498DB',
            'subdued_in_listing' => false,
            'show_listing_badge' => false,
            'hidden_globally' => false,
            'hard_delete' => false,
            'sort' => 1
        ],
        2 => [
            'name' => 'Draft',
            'text_color' => '#999999',
            'background_color' => '#EEEEEE',
            'subdued_in_listing' => true,
            'show_listing_badge' => true,
            'hidden_globally' => false,
            'hard_delete' => false,
            'sort' => 2
        ]
    ]
];
