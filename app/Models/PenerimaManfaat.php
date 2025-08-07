<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenerimaManfaat extends Model
{
    protected $fillable = ['jenis_kegiatan_id', 'penerima_manfaat'];

    public function jenisKegiatan()
    {
        return $this->belongsTo(JenisKegiatan::class);
    }
}