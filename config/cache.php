<?php

return [
    'default' => env('CACHE_DRIVER') ?? 'database',

    'drivers' => [
        'database' => [
            // ga butuh config tambahan, pakai koneksi DB yang udah ada
        ],
        'redis' => [
            'host'     => env('REDIS_HOST') ?? '127.0.0.1',
            'port'     => (int) (env('REDIS_PORT') ?? 6379),
            'password' => env('REDIS_PASSWORD') ?? null,
            'database' => (int) (env('REDIS_DB') ?? 0),
            'prefix'   => env('REDIS_PREFIX') ?? 'jtech_cache:',
        ],
    ],
];
