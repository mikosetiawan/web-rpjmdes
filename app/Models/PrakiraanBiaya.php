<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrakiraanBiaya extends Model
{
    protected $fillable = [
        'jenis_kegiatan_id',
        'jumlah',
        'sumber_dana',
        'swakelola',
        'antara_pihak',
        'kerjasama_desa',
        'pola_pelaksanaan'
    ];

    public function jenisKegiatan()
    {
        return $this->belongsTo(JenisKegiatan::class);
    }
}