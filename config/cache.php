<?php

return [
    'default' => jtech_env('CACHE_DRIVER') ?? 'database',

    'drivers' => [
        'database' => [
            // ga butuh config tambahan, pakai koneksi DB yang udah ada
        ],
        'redis' => [
            'host'     => jtech_env('REDIS_HOST') ?? '127.0.0.1',
            'port'     => (int) (jtech_env('REDIS_PORT') ?? 6379),
            'password' => jtech_env('REDIS_PASSWORD') ?? null,
            'database' => (int) (jtech_env('REDIS_DB') ?? 0),
            'prefix'   => jtech_env('REDIS_PREFIX') ?? 'jtech_cache:',
        ],
    ],
];
