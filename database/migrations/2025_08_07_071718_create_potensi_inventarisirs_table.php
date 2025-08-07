<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('potensi_inventarisirs', function (Blueprint $table) {
            $table->id();
            $table->string('potensi');
            $table->string('lokasi');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('potensi_inventarisirs');
    }
};