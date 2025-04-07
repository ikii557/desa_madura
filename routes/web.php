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
Route::get('adminsatu', function () {
    return view('pages.datauser.admin.adminsatu.dataadminsatu');
});
Route::get('admindua', function () {
    return view('pages.datauser.admin.admindua.dataadmindua');
});
Route::get('perangkatdesa', function () {
    return view('pages.datauser.perangkatdesa');
});
Route::get('warga', function () {
    return view('pages.datauser.warga');
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
Route::get('/', function () {
    return view('pages.index');
});
Route::get('chatforum', function () {
    return view('pages.chatforum.formchat');
});