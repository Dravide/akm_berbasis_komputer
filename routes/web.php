<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('siswa/import', [SiswasController::class, 'import'])->name('siswa.import');
Route::get('siswa/cari', [SiswasController::class, 'cari'])->name('siswa.cari');
Route::resource('siswa', SiswasController::class);
Route::resource('kelas', KelasController::class);
