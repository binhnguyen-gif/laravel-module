<?php

return [
    'guards' => [
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
    ],

    'providers' => [
        'admins' => [
            'driver' => 'eloquent',
            'model' => \Modules\Core\Entities\Admin::class,
        ],

    ],

    'passwords' => [
        'admins' => [
            'provider' => 'admins',
            'table' => 'admins_password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],
];
