<?php

use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/materi/index', action: () 
   // MateriController::class, 'index');

    Route::resource('materi', MateriController::class);
    Route::resource('Prodi', ProdiController::class);
    Route::resource('fakultas', FakultasController::class);
    Route::resource('mhs', MahasiswaController::class);
    Route::resource('dosen', DosenController::class);