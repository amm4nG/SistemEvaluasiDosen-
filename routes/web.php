<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\PengampuhMatakuliahController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RekapEvaluasiController;
use App\Http\Controllers\TambahDosenController;
use App\Http\Controllers\TambahMatakuliahController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('informatika', [WelcomeController::class, 'informatika']);
Route::get('sipil', [WelcomeController::class, 'sipil']);
Route::get('pwk', [WelcomeController::class, 'pwk']);

Route::get('evaluasi-dosen/{id}', [WelcomeController::class, 'show']);
Route::post('evaluasi-store', [WelcomeController::class, 'store']);

Route::resource('tambah-dosen', TambahDosenController::class)->middleware('auth');
Route::resource('rekap-evaluasi', RekapEvaluasiController::class)->middleware('auth');
Route::resource('program-studi', ProdiController::class)->middleware('auth');
Route::resource('dosen', DosenController::class)->middleware('auth');
Route::resource('matakuliah', MatakuliahController::class)->middleware('auth');
Route::resource('tambah-matakuliah', TambahMatakuliahController::class)->middleware('auth');
Route::resource('pengampuh-matakuliah', PengampuhMatakuliahController::class)->middleware('auth');
Route::resource('periode', PeriodeController::class)->middleware('auth');
Route::resource('pertanyaan', PertanyaanController::class)->middleware('auth');

Route::resource('validasi', LoginController::class);

Route::get('login', function () {
    return view('admin.login');
})->middleware('guest')->name('login');

Route::get('home', function () {
    return view('admin.home');
})->middleware('auth');
