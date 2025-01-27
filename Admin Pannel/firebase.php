<?php

return [
    'default' => 'default',
    'projects' => [
        'default' => [
            'credentials' => [
                'file' => storage_path('path/to/service-account-key.json'),
            ],
            'database' => [
                'url' => 'https://your-firebase-project-url.firebaseio.com',
            ],
        ],
    ],
];