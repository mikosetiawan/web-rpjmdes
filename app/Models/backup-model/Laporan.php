<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $fillable = ['pola_pelaksanaan_id', 'konten'];

    public function polaPelaksanaan()
    {
        return $this->belongsTo(PolaPelaksanaan::class);
    }
}