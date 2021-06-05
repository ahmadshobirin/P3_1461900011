<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::view('/', 'home');
Route::resource("siswa", SiswaController::class);
