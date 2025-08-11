<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bidang;
use App\Models\SubBidang;

class BidangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_bidang' => 'PENYELENGGARAAN PEMERINTAHAN DESA',
                'sub_bidang' => [
                    'Penyediaan Penghasilan Tetap dan Tunjangan Kepala Desa',
                    'Penyediaan Penghasilan Tetap dan Tunjangan Perangkat Desa',
                ]
            ],
        ];

        foreach ($data as $bidangData) {
            $bidang = Bidang::create([
                'nama_bidang' => $bidangData['nama_bidang'],
            ]);

            foreach ($bidangData['sub_bidang'] as $subBidang) {
                SubBidang::create([
                    'bidang_id' => $bidang->id,
                    'nama_sub_bidang' => $subBidang,
                ]);
            }
        }
    }
}
