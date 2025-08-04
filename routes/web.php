<?php

use App\Http\Controllers\BidangController;
use App\Http\Controllers\JenisKegiatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PolaPelaksanaanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubBidangController;
use App\Http\Controllers\WaktuPelaksanaanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('bidang', BidangController::class);
    Route::resource('sub-bidang', SubBidangController::class);
    Route::resource('jenis-kegiatan', JenisKegiatanController::class);
    Route::resource('waktu-pelaksanaan', WaktuPelaksanaanController::class);
    Route::resource('pola-pelaksanaan', PolaPelaksanaanController::class);
    Route::resource('laporan', LaporanController::class);

    Route::get('/laporan/export/excel', [LaporanController::class, 'exportExcel'])->name('laporan.export.excel');
    Route::get('/laporan/export/pdf', [LaporanController::class, 'exportPdf'])->name('laporan.export.pdf');
    Route::get('/laporan/laporan/print', [LaporanController::class, 'print'])->name('laporan.print');
});


require __DIR__.'/auth.php';
