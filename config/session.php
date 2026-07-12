<?php

return [
    'driver'      => env('SESSION_DRIVER') ?? 'file',
    'lifetime'    => (int) (env('SESSION_LIFETIME') ?? 120), // menit
    'cookie_name' => env('SESSION_COOKIE') ?? 'jtech_session',
    'path'        => __DIR__ . '/../storage/sessions',
    'domain'      => env('SESSION_DOMAIN') ?? '',
    'secure'      => (env('SESSION_SECURE_COOKIE') ?? 'false') === 'true',
    'same_site'   => env('SESSION_SAME_SITE') ?? 'Lax',
];
