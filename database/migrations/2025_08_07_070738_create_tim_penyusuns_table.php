<?php 


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tim_penyusuns', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan_dalam_tim');
            $table->string('jabatan_bidang')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tim_penyusuns');
    }
};