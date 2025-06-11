<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/', [AuthController::class, 'do_login'])->name('login.process');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'do_register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
