<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimPenyusun;
use App\Models\PotensiInventarisir;
use App\Models\Rpjmdes;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik
        $totalTimPenyusun = TimPenyusun::count();
        $totalPotensi     = PotensiInventarisir::count();
        $totalRpjmdes     = Rpjmdes::count();

        // Aktivitas terbaru
        $recentActivities = collect()
            ->concat(TimPenyusun::latest()->take(2)->get()->map(function ($item) {
                return [
                    'type'        => 'Tim Penyusun',
                    'description' => "Tim Penyusun baru ditambahkan: {$item->nama}",
                    'timestamp'   => $item->created_at,
                    'icon'        => 'fa-check',
                    'color'       => 'green-500'
                ];
            }))
            ->concat(PotensiInventarisir::latest()->take(2)->get()->map(function ($item) {
                return [
                    'type'        => 'Potensi',
                    'description' => "Potensi baru ditambahkan: {$item->potensi}",
                    'timestamp'   => $item->created_at,
                    'icon'        => 'fa-file-plus',
                    'color'       => 'blue-500'
                ];
            }))
            ->concat(Rpjmdes::latest()->take(2)->get()->map(function ($item) {
                return [
                    'type'        => 'RPJM Desa',
                    'description' => "RPJM Desa diperbarui: {$item->nama_program_kegiatan}",
                    'timestamp'   => $item->updated_at,
                    'icon'        => 'fa-edit',
                    'color'       => 'yellow-500'
                ];
            }))
            ->sortByDesc('timestamp')
            ->take(3);

        // Potensi terbaru
        $recentPotensi = PotensiInventarisir::latest()->take(3)->get();

        return view('dashboard', compact(
            'totalTimPenyusun',
            'totalPotensi',
            'totalRpjmdes',
            'recentActivities',
            'recentPotensi',
        ));
    }
}
