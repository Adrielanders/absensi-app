<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::any('/login', [UserController::class, 'login'])->name('login');
