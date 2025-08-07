<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LokasiDusun extends Model
{
    protected $fillable = ['jenis_kegiatan_id', 'lokasi', 'dusun', 'satuan'];

    public function jenisKegiatan()
    {
        return $this->belongsTo(JenisKegiatan::class);
    }
}