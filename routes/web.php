<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn() => view('home'))->name('home');
Route::resource('siswa', SiswasController::class);
Route::resource('kelas', KelasController::class);