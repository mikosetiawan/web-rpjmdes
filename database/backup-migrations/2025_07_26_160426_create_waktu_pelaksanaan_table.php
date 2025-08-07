<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('waktu_pelaksanaan', function (Blueprint $table) {
            $table->id();
          $table->foreignId('jenis_kegiatan_id')->constrained('jenis_kegiatan')->onDelete('cascade');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('waktu_pelaksanaan');
    }
};