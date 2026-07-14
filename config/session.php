<?php

return [
    'driver'      => jtech_env('SESSION_DRIVER') ?? 'file',
    'lifetime'    => (int) (jtech_env('SESSION_LIFETIME') ?? 120), // menit
    'cookie_name' => jtech_env('SESSION_COOKIE') ?? 'jtech_session',
    'path'        => __DIR__ . '/../storage/sessions',
    'domain'      => jtech_env('SESSION_DOMAIN') ?? '',
    'secure'      => (jtech_env('SESSION_SECURE_COOKIE') ?? 'false') === 'true',
    'same_site'   => jtech_env('SESSION_SAME_SITE') ?? 'Lax',
];
