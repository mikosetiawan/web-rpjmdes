<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rpjmdes', function (Blueprint $table) {
            $table->id();

            // Bidang
            $table->string('nama_bidang');

            // Sub Bidang (disimpan array dalam JSON)
            $table->json('nama_sub_bidang');

            // Jenis Kegiatan
            $table->string('nama_program_kegiatan');
            $table->string('sdgs_ke')->nullable();
            $table->string('data_existing_tahun_ke')->nullable();

            // Target Capaian Tahun
            $table->integer('tahun_ke_0')->nullable();
            $table->integer('tahun_ke_1')->nullable();
            $table->integer('tahun_ke_2')->nullable();
            $table->integer('tahun_ke_3')->nullable();
            $table->integer('tahun_ke_4')->nullable();
            $table->integer('tahun_ke_5')->nullable();
            $table->integer('tahun_ke_6')->nullable();

            // Lokasi & Dusun
            $table->string('lokasi')->nullable();
            $table->string('dusun')->nullable();
            $table->string('satuan')->nullable();

            // Penerima Manfaat
            $table->string('penerima_manfaat')->nullable();

            // Waktu Pelaksanaan
            $table->year('tahun_2022')->nullable();
            $table->year('tahun_2023')->nullable();
            $table->year('tahun_2024')->nullable();
            $table->year('tahun_2025')->nullable();
            $table->year('tahun_2026')->nullable();
            $table->year('tahun_2027')->nullable();

            // Prakiraan Biaya
            $table->decimal('jumlah', 15, 2)->nullable();
            $table->string('sumber_dana')->nullable();
            $table->string('swakelola')->nullable();
            $table->string('kerjasama_desa')->nullable();
            $table->string('kerjasama_pihak_ketiga')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rpjmdes');
    }
};
