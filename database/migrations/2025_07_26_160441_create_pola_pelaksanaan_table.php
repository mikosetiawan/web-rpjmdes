<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pola_pelaksanaan', function (Blueprint $table) {
            $table->id();
           $table->foreignId('waktu_pelaksanaan_id')->constrained('waktu_pelaksanaan')->onDelete('cascade');
            $table->string('pola');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pola_pelaksanaan');
    }
};