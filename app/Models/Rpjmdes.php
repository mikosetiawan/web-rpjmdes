<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rpjmdes extends Model
{
    use HasFactory;

    protected $table = 'rpjmdes';

    protected $fillable = [
        'nama_bidang',
        'nama_sub_bidang',
        'nama_program_kegiatan',
        'sdgs_ke',
        'data_existing_tahun_ke',
        'tahun_ke_0',
        'tahun_ke_1',
        'tahun_ke_2',
        'tahun_ke_3',
        'tahun_ke_4',
        'tahun_ke_5',
        'tahun_ke_6',
        'lokasi',
        'dusun',
        'satuan',
        'penerima_manfaat',
        'tahun_2022',
        'tahun_2023',
        'tahun_2024',
        'tahun_2025',
        'tahun_2026',
        'tahun_2027',
        'jumlah',
        'sumber_dana',
        'swakelola',
        'kerjasama_desa',
        'kerjasama_pihak_ketiga',
    ];

    protected $casts = [
        'nama_sub_bidang' => 'array', // JSON → array
        'tahun_2022' => 'integer',
        'tahun_2023' => 'integer',
        'tahun_2024' => 'integer',
        'tahun_2025' => 'integer',
        'tahun_2026' => 'integer',
        'tahun_2027' => 'integer',
        'jumlah' => 'decimal:2',
    ];
}
