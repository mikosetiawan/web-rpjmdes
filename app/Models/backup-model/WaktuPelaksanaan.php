<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaktuPelaksanaan extends Model
{
    protected $table = 'waktu_pelaksanaan';
    protected $fillable = ['jenis_kegiatan_id', 'tanggal_mulai', 'tanggal_selesai'];

    public function jenisKegiatan()
    {
        return $this->belongsTo(JenisKegiatan::class);
    }

    public function polaPelaksanaan()
    {
        return $this->hasMany(PolaPelaksanaan::class);
    }
}