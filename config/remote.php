<?php
// config for RCodes/Remote
return [
    'hosts' => [
        'default' => [
            'host' => env('REMOTE_HOST'),

            'port' => env('REMOTE_PORT', 22),

            'user' => env('REMOTE_USER'),

            'path' => env('REMOTE_PATH'),
        ]
    ],

    'command-aliases' => [
        'clear-all-caches' => [
            'php artisan cache:clear',
            'php artisan config:clear',
            'php artisan route:clear',
            'php artisan view:clear',
        ]
    ]

];
