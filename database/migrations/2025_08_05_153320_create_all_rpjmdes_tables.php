<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllRpjmdesTables  extends Migration
{
    public function up()
    {
        Schema::create('bidangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bidang');
            $table->timestamps();
        });

        Schema::create('sub_bidangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bidang_id')->constrained()->onDelete('cascade');
            $table->string('nama_sub_bidang');
            $table->timestamps();
        });

        Schema::create('jenis_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_bidang_id')->constrained()->onDelete('cascade');
            $table->string('nama_program_kegiatan');
            $table->string('sdgs_ke')->nullable();
            $table->timestamps();
        });

        Schema::create('target_capaian_tahuns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_kegiatan_id')->constrained()->onDelete('cascade');
            $table->integer('tahun_ke_0')->nullable();
            $table->integer('tahun_ke_1')->nullable();
            $table->integer('tahun_ke_2')->nullable();
            $table->integer('tahun_ke_3')->nullable();
            $table->integer('tahun_ke_4')->nullable();
            $table->integer('tahun_ke_5')->nullable();
            $table->integer('tahun_ke_6')->nullable();
            $table->timestamps();
        });

        Schema::create('lokasi_dusuns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_kegiatan_id')->constrained()->onDelete('cascade');
            $table->string('lokasi');
            $table->string('dusun');
            $table->string('satuan');
            $table->timestamps();
        });

        Schema::create('penerima_manfaats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_kegiatan_id')->constrained()->onDelete('cascade');
            $table->string('penerima_manfaat');
            $table->timestamps();
        });

        Schema::create('waktu_pelaksanaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_kegiatan_id')->constrained()->onDelete('cascade');
            $table->year('tahun_2022')->nullable();
            $table->year('tahun_2023')->nullable();
            $table->year('tahun_2024')->nullable();
            $table->year('tahun_2025')->nullable();
            $table->year('tahun_2026')->nullable();
            $table->year('tahun_2027')->nullable();
            $table->timestamps();
        });

        Schema::create('prakiraan_biayas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_kegiatan_id')->constrained()->onDelete('cascade');
            $table->decimal('jumlah', 15, 2);
            $table->string('sumber_dana');
            $table->string('swakelola');
            $table->string('antara_pihak');
            $table->string('kerjasama_desa');
            $table->string('pola_pelaksanaan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prakiraan_biayas');
        Schema::dropIfExists('waktu_pelaksanaans');
        Schema::dropIfExists('penerima_manfaats');
        Schema::dropIfExists('lokasi_dusuns');
        Schema::dropIfExists('target_capaian_tahuns');
        Schema::dropIfExists('jenis_kegiatans');
        Schema::dropIfExists('sub_bidangs');
        Schema::dropIfExists('bidangs');
    }
}