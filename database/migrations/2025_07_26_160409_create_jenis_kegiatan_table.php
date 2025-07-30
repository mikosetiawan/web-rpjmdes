<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jenis_kegiatan', function (Blueprint $table) {
            $table->id();
           $table->foreignId('sub_bidang_id')->constrained('sub_bidang')->onDelete('cascade');
            $table->string('nama_kegiatan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jenis_kegiatan');
    }
};