<?php

return [

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

    /*
    |--------------------------------------------------------------------------
    | Roles i autoritzacions personalitzades
    |--------------------------------------------------------------------------
    |
    | Aquí pots especificar les configuracions relacionades amb rols com "admin".
    | Aquestes configuracions són només notes per indicar com gestionar
    | capacitats addicionals mitjançant Gates o Policies.
    |
    */

    'roles' => [
        'admin' => 'administrar',
    ],
];
