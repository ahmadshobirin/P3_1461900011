<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;

Route::view('/', 'home');
Route::resource("siswa", SiswaController::class);
Route::resource("guru", GuruController::class);
Route::resource("kelas", KelasController::class);
