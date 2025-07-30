<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RPJMSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Bidang
        $bidangId = DB::table('bidang')->insertGetId([
            'nama_bidang' => 'Bidang Pemberdayaan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Sub Bidang
        $subBidangId = DB::table('sub_bidang')->insertGetId([
            'bidang_id' => $bidangId,
            'nama_sub_bidang' => 'Sub Bidang Ekonomi Kreatif',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3. Jenis Kegiatan
        $jenisKegiatanId = DB::table('jenis_kegiatan')->insertGetId([
            'sub_bidang_id' => $subBidangId,
            'nama_kegiatan' => 'Pelatihan Digital Marketing UMKM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 4. Waktu Pelaksanaan
        $waktuPelaksanaanId = DB::table('waktu_pelaksanaan')->insertGetId([
            'jenis_kegiatan_id' => $jenisKegiatanId,
            'tanggal_mulai' => Carbon::now()->subDays(15)->format('Y-m-d'),
            'tanggal_selesai' => Carbon::now()->addDays(10)->format('Y-m-d'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 5. Pola Pelaksanaan
        $polaPelaksanaanId = DB::table('pola_pelaksanaan')->insertGetId([
            'waktu_pelaksanaan_id' => $waktuPelaksanaanId,
            'pola' => 'Kerja Sama Pihak Ketiga',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 6. Laporan
        DB::table('laporan')->insert([
            'pola_pelaksanaan_id' => $polaPelaksanaanId,
            'konten' => 'Kegiatan pelatihan telah berhasil dilaksanakan dengan antusiasme tinggi dari peserta.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
