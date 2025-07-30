<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PolaPelaksanaan extends Model
{
    protected $table = 'pola_pelaksanaan';
    protected $fillable = ['waktu_pelaksanaan_id', 'pola'];

    public function waktuPelaksanaan()
    {
        return $this->belongsTo(WaktuPelaksanaan::class);
    }

    public function laporan()
    {
        return $this->hasMany(Laporan::class);
    }
}