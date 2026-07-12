<?php

use App\Models\User;
use Novalites\Support\Facades\Route;

Route::get('/', function () {
    // dd(User::all()->toArray());
    return view('home', [
        'name' => "Jauhar imtikhan",
        'users' => User::all()->toArray() ?? [],
        'categories' => ['pisang', 'mangga'],
        'isGuest' => true
    ]);
});
