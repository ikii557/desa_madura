<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaDesaController;
use App\Http\Controllers\ChatForumController;
use App\Http\Controllers\JadwalPelayananController;
use App\Http\Controllers\PengaduanMasyarakatController;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\StatistikDesaController;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('pages.index');
});



// Berita Desa
Route::resource('berita-desa', BeritaDesaController::class);

// Chat Forum
Route::resource('chat-forum', ChatForumController::class);

// Jadwal Pelayanan
Route::resource('jadwal-pelayanan', JadwalPelayananController::class);

// Pengaduan Masyarakat
Route::resource('pengaduan-masyarakat', PengaduanMasyarakatController::class);

// Pengajuan Surat
Route::resource('pengajuan-surat', PengajuanSuratController::class);

// Statistik Desa
Route::resource('statistik-desa', StatistikDesaController::class);

// User Management
Route::resource('users', UserController::class);
