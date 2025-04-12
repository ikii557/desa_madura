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

Route::get('/dashboard', function () {
    return view('pages.index');
});

//datauser//
Route::get('adminsatu', [UserController::class,'index']);
Route::get('tambahadminsatu', [UserController::class,'create']);
Route::post('/store/admin', [UserController::class , 'store']);

Route::get('admindua', function () {
    return view('pages.datauser.admin.admindua.dataadmindua');
});
Route::get('perangkatdesa', function () {
    return view('pages.datauser.perangkatdesa');
});
Route::get('data_warga', function () {
    return view('pages.datauser.warga.datawarga');
});
Route::get('pengaduan', function () {
    return view('pages.datapengaduan.datapengaduan');
});
Route::get('pengajuankk', function () {
    return view('pages.datapengajuan.pengajuankk.datakk');
});
Route::get('pengajuanktp', function () {
    return view('pages.datapengajuan.pengajuanktp.dataktp');
});
Route::get('pengajuandomisili', function () {
    return view('pages.datapengajuan.pengajuandomisili.datadomisili');
});
Route::get('pengajuannikah', function () {
    return view('pages.datapengajuan.pengajuannikah.datanikah');
});
Route::get('perangkat_desa', function () {
    return view('pages.datauser.perangkatdesa.dataperangkatdesa');
});
Route::get('chatforum', function () {
    return view('pages.chatforum.formchat');
});
Route::get('berita', function () {
    return view('pages.berita.indexberita');
});
// Halaman utama pelayanan
Route::get('pelayanan', function () {
    return view('pages.datapelayanan.pelayanan');
});

// Halaman pelayanan senin-jumat
Route::get('senin_jumat', function () {
    return view('pages.datapelayanan.senin_jumat');
});

// Halaman pelayanan sabtu-minggu
Route::get('sabtu_minggu', function () {
    return view('pages.datapelayanan.sabtu_minggu');
});
Route::get('chat_forum', function () {
    return view('pages.chatforum.formchat');
});
// Submenu data chat
Route::get('data_chat', function () {
    return view('pages.chatforum.formchat');
});
Route::get('statistikdesa', function () {
    return view('pages.statistikdesa.datastatistikdesa');
});


// Submenu: data statistik desa
Route::get('data_statistik', function () {
    return view('pages.statistikdesa.datastatistikdesa');
});
