<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisKegiatan extends Model
{

    protected $table = 'jenis_kegiatan';
    protected $fillable = ['sub_bidang_id', 'nama_kegiatan'];

    public function subBidang()
    {
        return $this->belongsTo(SubBidang::class);
    }

    public function waktuPelaksanaan()
    {
        return $this->hasMany(WaktuPelaksanaan::class);
    }
}