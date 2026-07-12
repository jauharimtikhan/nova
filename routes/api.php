<?php

use Novalites\Router\Route;

Route::get('/login', function () {
    return json([
        'success' => true,
        'message' => "hello world"
    ]);
});
