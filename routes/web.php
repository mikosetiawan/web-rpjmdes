<?php

use App\Http\Controllers\BidangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisKegiatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PolaPelaksanaanController;
use App\Http\Controllers\PotensiInventarisirController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RpjmdesController;
use App\Http\Controllers\SubBidangController;
use App\Http\Controllers\TimPenyusunController;
use App\Http\Controllers\WaktuPelaksanaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // RPJMDES
    Route::get('/rpjmdes', [RpjmdesController::class, 'index'])->name('rpjmdes.index');
    Route::get('/rpjmdes/create', [RpjmdesController::class, 'create'])->name('rpjmdes.create');
    Route::post('/rpjmdes/store', [RpjmdesController::class, 'store'])->name('rpjmdes.store');
    Route::get('/rpjmdes/{id}/edit', [RpjmdesController::class, 'edit'])->name('rpjmdes.edit');
    Route::delete('/rpjmdes/{id}', [RpjmdesController::class, 'destroy'])->name('rpjmdes.destroy');

    // Susunan Tim Penyusun RPJM Desa
    Route::get('/tim-penyusun', [TimPenyusunController::class, 'index'])->name('tim-penyusun.index');
    Route::get('/tim-penyusun/create', [TimPenyusunController::class, 'create'])->name('tim-penyusun.create');
    Route::post('/tim-penyusun/store', [TimPenyusunController::class, 'store'])->name('tim-penyusun.store');
    Route::get('/tim-penyusun/{id}/edit', [TimPenyusunController::class, 'edit'])->name('tim-penyusun.edit');
    Route::put('/tim-penyusun/{id}', [TimPenyusunController::class, 'update'])->name('tim-penyusun.update');
    Route::delete('/tim-penyusun/{id}', [TimPenyusunController::class, 'destroy'])->name('tim-penyusun.destroy');

    // Potensi Inventarisir
    Route::get('/potensi-inventarisir', [PotensiInventarisirController::class, 'index'])->name('potensi-inventarisir.index');
    Route::get('/potensi-inventarisir/create', [PotensiInventarisirController::class, 'create'])->name('potensi-inventarisir.create');
    Route::post('/potensi-inventarisir/store', [PotensiInventarisirController::class, 'store'])->name('potensi-inventarisir.store');
    Route::get('/potensi-inventarisir/{id}/edit', [PotensiInventarisirController::class, 'edit'])->name('potensi-inventarisir.edit');
    Route::put('/potensi-inventarisir/{id}', [PotensiInventarisirController::class, 'update'])->name('potensi-inventarisir.update');
    Route::delete('/potensi-inventarisir/{id}', [PotensiInventarisirController::class, 'destroy'])->name('potensi-inventarisir.destroy');

    Route::resource('bidang', BidangController::class);
    Route::resource('sub-bidang', SubBidangController::class);

    // Route::resource('jenis-kegiatan', JenisKegiatanController::class);
    // Route::resource('waktu-pelaksanaan', WaktuPelaksanaanController::class);
    // Route::resource('pola-pelaksanaan', PolaPelaksanaanController::class);
    // Route::resource('laporan', LaporanController::class);

    // Route::get('/laporan/export/excel', [LaporanController::class, 'exportExcel'])->name('laporan.export.excel');
    // Route::get('/laporan/export/pdf', [LaporanController::class, 'exportPdf'])->name('laporan.export.pdf');
    // Route::get('/laporan/laporan/print', [LaporanController::class, 'print'])->name('laporan.print');
});

require __DIR__ . '/auth.php';