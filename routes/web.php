<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\karyawanController;

Route::get('/', function () {
    return view('index');
});

// BERHUBUNGAN DENGAN USER
Route::any('/login', [UserController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {
    // BERHUBUNGAN DENGAN DASHBOARD
    Route::any('/Karyawan', [dashboardController::class, 'ToInputData'])->name('karyawan');

    Route::any('/store', [karyawanController::class, 'store'])->name('store');
});
