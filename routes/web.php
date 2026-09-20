<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/klinik', function () {
    return 'Ini adalah Sistem Informasi Klinik';
});
