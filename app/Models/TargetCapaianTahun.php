<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TargetCapaianTahun extends Model
{
    protected $fillable = [
        'jenis_kegiatan_id',
        'tahun_ke_0',
        'tahun_ke_1',
        'tahun_ke_2',
        'tahun_ke_3',
        'tahun_ke_4',
        'tahun_ke_5',
        'tahun_ke_6'
    ];

    public function jenisKegiatan()
    {
        return $this->belongsTo(JenisKegiatan::class);
    }
}