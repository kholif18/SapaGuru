<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\{
    DashboardController as AdminDashboardController,
    GuruController as AdminGuruController,
    SiswaController as AdminSiswaController,
    ModulController as AdminModulController,
    JadwalController as AdminJadwalController,
    LaporanController as AdminLaporanController,
    PengaturanController as AdminPengaturanController
};
use App\Http\Controllers\Guru\{
    DashboardController as GuruDashboardController,
    ModulController as GuruModulController,
    JurnalController as GuruJurnalController,
    PenilaianController as GuruPenilaianController,
    RaporController as GuruRaporController,
    JadwalController as GuruJadwalController
};
use App\Http\Controllers\Siswa\{
    DashboardController as SiswaDashboardController,
    PembelajaranController as SiswaPembelajaranController,
    TugasController as SiswaTugasController,
    JadwalController as SiswaJadwalController,
    NilaiController as SiswaNilaiController,
    PortofolioController as SiswaPortofolioController
};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tlogin', function () {
    return view('test/login');
});

Route::get('/forgot', function () {
    return view('test/forgot');
});

Route::get('/tregister', function () {
    return view('test/register');
});


// Admin ==================

Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});



// Guru ====================

Route::prefix('guru')->name('guru.')->group(function (){
    Route::get('/dashboard', [GuruDashboardController::class, 'index'])->name('dashboard');
    Route::get('/modul', [GuruModulController::class, 'index'])->name('modul');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::controller(AuthController::class)->group(function () {
//     Route::get('/', 'showLoginForm')->name('login');
//     Route::post('/login', 'login');
//     Route::post('/logout', 'logout')->name('logout');
    
//     // Password Reset Routes
//     Route::get('/forgot-password', 'showLinkRequestForm')->name('password.request');
//     Route::post('/forgot-password', 'sendResetLinkEmail')->name('password.email');
//     Route::get('/reset-password/{token}', 'showResetForm')->name('password.reset');
//     Route::post('/reset-password', 'reset')->name('password.update');
// });

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
// Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
//     // Dashboard
//     Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    
//     // Manajemen User
//     Route::resource('/guru', AdminGuruController::class)->except(['show']);
//     Route::resource('/siswa', AdminSiswaController::class)->except(['show']);
    
//     // Akademik
//     Route::resource('/modul', AdminModulController::class);
//     Route::resource('/jadwal', AdminJadwalController::class);
    
//     // Laporan
//     Route::prefix('laporan')->group(function () {
//         Route::get('/', [AdminLaporanController::class, 'index'])->name('admin.laporan.index');
//         Route::get('/guru', [AdminLaporanController::class, 'guru'])->name('admin.laporan.guru');
//         Route::get('/siswa', [AdminLaporanController::class, 'siswa'])->name('admin.laporan.siswa');
//         Route::get('/akademik', [AdminLaporanController::class, 'akademik'])->name('admin.laporan.akademik');
//     });
    
//     // Pengaturan
//     Route::get('/pengaturan', [AdminPengaturanController::class, 'index'])->name('admin.pengaturan');
//     Route::put('/pengaturan/update', [AdminPengaturanController::class, 'update'])->name('admin.pengaturan.update');
// });

/*
|--------------------------------------------------------------------------
| Guru Routes
|--------------------------------------------------------------------------
*/
// Route::prefix('guru')->middleware(['auth', 'role:guru'])->group(function () {
//     // Dashboard
//     Route::get('/dashboard', [GuruDashboardController::class, 'index'])->name('guru.dashboard');
    
//     // Modul Ajar
//     Route::resource('/modul', GuruModulController::class);
    
//     // Jurnal Mengajar
//     Route::resource('/jurnal', GuruJurnalController::class);
    
//     // Penilaian
//     Route::prefix('penilaian')->group(function () {
//         Route::get('/tugas', [GuruPenilaianController::class, 'tugas'])->name('guru.penilaian.tugas');
//         Route::get('/ulangan', [GuruPenilaianController::class, 'ulangan'])->name('guru.penilaian.ulangan');
//         Route::post('/simpan', [GuruPenilaianController::class, 'simpan'])->name('guru.penilaian.simpan');
//     });
    
//     // Rapor
//     Route::resource('/rapor', GuruRaporController::class)->only(['index', 'show', 'store']);
    
//     // Jadwal
//     Route::get('/jadwal', [GuruJadwalController::class, 'index'])->name('guru.jadwal');
// });

/*
|--------------------------------------------------------------------------
| Siswa Routes
|--------------------------------------------------------------------------
*/
// Route::prefix('siswa')->middleware(['auth', 'role:siswa'])->group(function () {
//     // Dashboard
//     Route::get('/dashboard', [SiswaDashboardController::class, 'index'])->name('siswa.dashboard');
    
//     // Pembelajaran
//     Route::prefix('pembelajaran')->group(function () {
//         Route::get('/modul', [SiswaPembelajaranController::class, 'modul'])->name('siswa.modul.index');
//         Route::get('/modul/{modul}', [SiswaPembelajaranController::class, 'showModul'])->name('siswa.modul.show');
        
//         Route::get('/tugas', [SiswaTugasController::class, 'index'])->name('siswa.tugas.index');
//         Route::get('/tugas/{tugas}', [SiswaTugasController::class, 'show'])->name('siswa.tugas.show');
//         Route::post('/tugas/{tugas}/kumpulkan', [SiswaTugasController::class, 'kumpulkan'])->name('siswa.tugas.kumpulkan');
//     });
    
//     // Jadwal
//     Route::get('/jadwal', [SiswaJadwalController::class, 'index'])->name('siswa.jadwal');
    
//     // Nilai
//     Route::get('/nilai', [SiswaNilaiController::class, 'index'])->name('siswa.nilai.index');
//     Route::get('/rapor', [SiswaNilaiController::class, 'rapor'])->name('siswa.nilai.rapor');
    
//     // Portofolio
//     Route::resource('/portofolio', SiswaPortofolioController::class)->only(['index', 'show']);
// });

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
// Route::prefix('api')->middleware('auth')->group(function () {
//     // API routes yang digunakan oleh semua role
//     // Route::get('/check-email', [AuthController::class, 'checkEmail'])->name('api.check-email');
    
//     // API khusus admin
//     Route::middleware('role:admin')->group(function () {
//         Route::get('/guru/data', [AdminGuruController::class, 'data'])->name('api.admin.guru.data');
//         Route::get('/siswa/data', [AdminSiswaController::class, 'data'])->name('api.admin.siswa.data');
//     });
    
//     // API khusus guru
//     Route::middleware('role:guru')->group(function () {
//         Route::get('/siswa-by-kelas', [GuruPenilaianController::class, 'getSiswaByKelas']);
//     });
// });

require __DIR__.'/auth.php';
