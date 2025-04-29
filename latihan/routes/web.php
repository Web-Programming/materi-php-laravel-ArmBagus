<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function (): view {
    return view('profil');
});

Route::get('/berita/{id}', function ($id): view {
    return view('berita'), ['id' => $id]; 
});

Route::get('/total/{angka1}/{angka2}', function ($angka1, $angka2): view {
    $total = $angka1 + $angka2;
    return view('hasil'), ['total' => $total];
});