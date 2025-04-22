<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerangkatdesaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    // Halaman depan untuk masyarakat umum
    Route::get('/masyarakat_daerah_desa_madura', [DashboardController::class, 'halamandepan']);

    // Auth
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/store/register', [AuthController::class, 'storeregister']);
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/store/login', [AuthController::class, 'storelogin']);
});

Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('pages.index');
    });
    Route::get('/indexwarga', function () {
        return view('pages.datauser.dashboard_warga');
    });
    Route::get('/lokasi_desamadura', function () {
        return view('pages.datauser.dashboard_warga');
    });
    // ========== DATA USER ==========
    // Admin Satu
    Route::get('adminsatu', [UserController::class, 'index']);
    Route::get('tambahadminsatu', [UserController::class, 'create']);
    Route::post('/store/admin', [UserController::class, 'store']);
    Route::get('editadminsatu/{id}', [UserController::class, 'edit']);
    Route::post('/update/adminsatu/{id}', [UserController::class, 'update']);
    // Admin Dua (static view)
    Route::get('admindua', function () {
        return view('pages.datauser.admin.admindua.dataadmindua');
    });

    // Perangkat Desa
    Route::get('perangkatdesa', [PerangkatdesaController::class, 'index']);
    Route::get('tambahperangkatdesa', [PerangkatdesaController::class, 'create']);
    Route::post('/store/perangkatdesa', [PerangkatdesaController::class, 'store']);
    Route::get('editperangkatdesa/{id}', [PerangkatdesaController::class, 'edit']);
    Route::post('/update/perangkatdesa/{id}', [PerangkatdesaController::class, 'update']);
    

    // ========== DATA WARGA ==========
    Route::get('data_warga', [WargaController::class, 'index']);
    Route::get('tambahwarga', [WargaController::class, 'create']);
    Route::post('/store/warga', [WargaController::class, 'store']);

    // ========== PENGADUAN ==========
    Route::get('pengaduan', function () {
        return view('pages.datapengaduan.datapengaduan');
    });

    // ========== PENGAJUAN SURAT ==========
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

    // ========== CHAT FORUM ==========
    Route::get('chatforum', function () {
        return view('pages.chatforum.formchat');
    });
    Route::get('chat_forum', function () {
        return view('pages.chatforum.formchat');
    });
    Route::get('data_chat', function () {
        return view('pages.chatforum.formchat');
    });

    // ========== BERITA ==========
    Route::get('berita', function () {
        return view('pages.berita.indexberita');
    });

    // ========== PELAYANAN ==========
    Route::get('pelayanan', function () {
        return view('pages.datapelayanan.pelayanan');
    });
    Route::get('senin_jumat', function () {
        return view('pages.datapelayanan.senin_jumat');
    });
    Route::get('sabtu_minggu', function () {
        return view('pages.datapelayanan.sabtu_minggu');
    });

    // ========== STATISTIK DESA ==========
    Route::get('statistikdesa', function () {
        return view('pages.statistikdesa.datastatistikdesa');
    });
    Route::get('data_statistik', function () {
        return view('pages.statistikdesa.datastatistikdesa');
    });

});
