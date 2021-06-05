<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;

Route::view('/', 'home');
Route::resource("siswa", SiswaController::class);
Route::resource("guru", GuruController::class);
