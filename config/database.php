<?php
return [
    'mysql' => [
        'driver'   => 'mysql',
        'host'     => jtech_env('DB_HOST') ?? '127.0.0.1',
        'port'     => jtech_env('DB_PORT') ?? '3306',
        'database' => jtech_env('DB_DATABASE') ?? 'jtech_rest_api',
        'username' => jtech_env('DB_USERNAME') ?? 'root',
        'password' => jtech_env('DB_PASSWORD') ?? '',
        'charset'  => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
    ],
    'postgree' => [
        'driver'   => 'pgsql',
        'host'     => jtech_env('DB_HOST') ?? '127.0.0.1',
        'port'     => jtech_env('DB_PORT') ?? '3306',
        'database' => jtech_env('DB_DATABASE') ?? 'jtech_rest_api',
        'username' => jtech_env('DB_USERNAME') ?? 'root',
        'password' => jtech_env('DB_PASSWORD') ?? '',
        'charset'  => 'utf8mb4',
        'prefix' => jtech_env("DB_PREFIX", '') ?? ""
    ],
    'sqlite' => [
        'driver'   => 'sqlite',
        'database' =>  dirname(__DIR__) . "/database.sqlite" ?? 'jtech_rest_api',
        'prefix' => jtech_env("DB_PREFIX", '') ?? ""
    ],
];
