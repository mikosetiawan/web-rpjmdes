<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rpjmdes;

class RpjmdesSeeder extends Seeder
{
    public function run(): void
    {
        Rpjmdes::create([
            'nama_bidang' => 'Bidang Pembangunan Desa',
            'nama_sub_bidang' => ['Pendidikan', 'Kesehatan', 'Infrastruktur'], // Array → otomatis disimpan JSON
            'nama_program_kegiatan' => 'Program Peningkatan Infrastruktur Desa',
            'sdgs_ke' => '9',
            'data_existing_tahun_ke' => '2025',

            'tahun_ke_0' => 0,
            'tahun_ke_1' => 1,
            'tahun_ke_2' => 2,
            'tahun_ke_3' => 3,
            'tahun_ke_4' => 4,
            'tahun_ke_5' => 5,
            'tahun_ke_6' => 6,

            'lokasi' => 'Pusat Desa',
            'dusun' => 'Dusun I',
            'satuan' => 'Unit',

            'penerima_manfaat' => 'Warga Desa',

            'tahun_2022' => 2022,
            'tahun_2023' => 2023,
            'tahun_2024' => 2024,
            'tahun_2025' => 2025,
            'tahun_2026' => 2026,
            'tahun_2027' => 2027,

            'jumlah' => 150000000,
            'sumber_dana' => 'APBDes',
            'swakelola' => 'Ya',
            'antara_pihak' => 'Tidak',
            'kerjasama_desa' => 'Ya',
            'pola_pelaksanaan' => 'Swakelola',
        ]);
    }
}
