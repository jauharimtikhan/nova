<?php

return [
    'default' => jtech_env('DB_CONNECTION', 'mysql'),

    'connections' => [

        'mysql' => [
            'driver'   => 'mysql',
            'host'     => jtech_env('DB_HOST', '127.0.0.1'),
            'port'     => jtech_env('DB_PORT', 3306),
            'database' => jtech_env('DB_DATABASE', 'db_jtech_management'),
            'username' => jtech_env('DB_USERNAME', 'root'),
            'password' => jtech_env('DB_PASSWORD', ''),
            'charset'  => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ],

        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => jtech_env('DB_HOST', '127.0.0.1'),
            'port'     => jtech_env('DB_PORT', 5432),
            'database' => jtech_env('DB_DATABASE', 'jtech'),
            'username' => jtech_env('DB_USERNAME', 'postgres'),
            'password' => jtech_env('DB_PASSWORD', ''),
            'charset'  => 'utf8',
            'schema'   => 'public',
        ],

        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => jtech_env('DB_DATABASE', __DIR__ . '/../database/database.sqlite'),
        ],

        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'host'     => jtech_env('DB_HOST', 'localhost'),
            'port'     => jtech_env('DB_PORT', 1433),
            'database' => jtech_env('DB_DATABASE', 'jtech'),
            'username' => jtech_env('DB_USERNAME', 'sa'),
            'password' => jtech_env('DB_PASSWORD', ''),
        ],

    ],
];
