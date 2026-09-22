<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('/patients/show/{id}', [PatientController::class, 'show'])->name('patients.show');


Route::get('/sisfo/{nama}', function ($nama) {
    return 'Ini adalah Sistem Mahasiswa sisfo dengan nama '.$nama;
})->name('sisfo');