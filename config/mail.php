<?php

return [
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'email-smtp.ap-south-1.amazonaws.com'),
    'port' => env('MAIL_PORT', 587),
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'support@encampadventures.com'),
        'name' => env('MAIL_FROM_NAME', 'Encamp Website'),
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => [
        'theme' => 'default',
        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],
    'log_channel' => env('MAIL_LOG_CHANNEL'),
];
