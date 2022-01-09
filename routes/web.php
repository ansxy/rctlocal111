<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CAController;
use App\Http\Controllers\DAController;
use App\Http\Controllers\DataAnggotaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/data_anggota', function () {
    return view('lay.data_anggota');
});

Route::get('/hitung_cekin', function () {
    return view('lay.hitung_cekin');
});

Route::get('/catatan_anggota', [CAController::class, 'index'])->name('catatan_anggota');

Route::get('/search', [CAController::class, 'search'])->name('search');
Route::get('/check_in_reports', [CAController::class, 'checkIn'])->name('checkIn');
Route::get('/data_anggota', [DAController::class, 'index'])->name('data_anggota');
Route::get('/export',[CAController::class,'export'])->name('export');

Route::get('/kelola_anggota', [DataAnggotaController::class, 'index'])->name('kelola_anggota');
Route::get('/tambah_anggota', [DataAnggotaController::class, 'create'])->name('tambah_anggota');
Route::post('/simpan_anggota', [DataAnggotaController::class, 'store'])->name('simpan_anggota');
Route::get('/edit_anggota/{id}', [DataAnggotaController::class, 'edit'])->name('edit_anggota');
Route::put('/update_anggota/{id}', [DataAnggotaController::class, 'update'])->name('update_anggota');
Route::delete('/delete_anggota/{id}', [DataAnggotaController::class, 'destroy'])->name('delete_anggota');
