<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/klinik', function () {
    return 'Sistem Informasi Klinik';
});
