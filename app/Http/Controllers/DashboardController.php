<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimPenyusun;
use App\Models\PotensiInventarisir;
use App\Models\Bidang;
use App\Models\JenisKegiatan;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch stats
        $totalTimPenyusun = TimPenyusun::count();
        $totalPotensi = PotensiInventarisir::count();

        // Fetch recent activities
        $recentActivities = collect()
            ->concat(TimPenyusun::latest()->take(2)->get()->map(function ($item) {
                return [
                    'type' => 'Tim Penyusun',
                    'description' => "Tim Penyusun baru ditambahkan: {$item->nama}",
                    'timestamp' => $item->created_at,
                    'icon' => 'fa-check',
                    'color' => 'green-500'
                ];
            }))
            ->concat(PotensiInventarisir::latest()->take(2)->get()->map(function ($item) {
                return [
                    'type' => 'Potensi',
                    'description' => "Potensi baru ditambahkan: {$item->potensi}",
                    'timestamp' => $item->created_at,
                    'icon' => 'fa-file-plus',
                    'color' => 'blue-500'
                ];
            }))
            ->concat(JenisKegiatan::latest()->take(1)->get()->map(function ($item) {
                return [
                    'type' => 'RPJM Desa',
                    'description' => "RPJM Desa diperbarui: {$item->nama_program_kegiatan}",
                    'timestamp' => $item->updated_at,
                    'icon' => 'fa-edit',
                    'color' => 'yellow-500'
                ];
            }))
            ->sortByDesc('timestamp')
            ->take(3);

        // Fetch recent Potensi Inventarisir
        $recentPotensi = PotensiInventarisir::latest()->take(3)->get();

        // Fetch data for chart (programs per bidang)
        $bidangData = Bidang::withCount('jenisKegiatans')->get()->map(function ($bidang) {
            return [
                'nama' => $bidang->nama_bidang,
                'count' => $bidang->jenis_kegiatans_count ?? 0
            ];
        })->filter(function ($item) {
            return $item['count'] > 0; // Only include bidangs with at least one kegiatan
        });

        return view('dashboard', compact(
            'totalTimPenyusun',
            'totalPotensi',
            'recentActivities',
            'recentPotensi',
            'bidangData'
        ));
    }
}