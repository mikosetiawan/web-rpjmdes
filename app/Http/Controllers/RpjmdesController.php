<?php

namespace App\Http\Controllers;

use App\Models\JenisKegiatan;
use App\Models\Bidang;
use App\Models\SubBidang;
use App\Http\Requests\StoreRpjmdesRequest;
use App\Models\LokasiDusun;
use App\Models\PenerimaManfaat;
use App\Models\PrakiraanBiaya;
use App\Models\TargetCapaianTahun;
use App\Models\WaktuPelaksanaan;
use Illuminate\Http\Request;

class RpjmdesController extends Controller
{
    public function index()
    {
        $rpjmdes = JenisKegiatan::with([
            'subBidang.bidang', 
            'targetCapaianTahuns', 
            'lokasiDusuns', 
            'penerimaManfaats', 
            'waktuPelaksanaans', 
            'prakirakanBiayas'
        ])->get();
        return view('rpjmdes.index', compact('rpjmdes'));
    }

    public function create()
    {
        $bidangs = Bidang::all();
        $subBidangs = SubBidang::all();
        return view('rpjmdes.create', compact('bidangs', 'subBidangs'));
    }

    public function store(StoreRpjmdesRequest $request)
    {
        $jenisKegiatan = JenisKegiatan::create([
            'sub_bidang_id' => $request->sub_bidang_id,
            'nama_program_kegiatan' => $request->nama_program_kegiatan,
            'sdgs_ke' => $request->sdgs_ke,
        ]);

        TargetCapaianTahun::create([
            'jenis_kegiatan_id' => $jenisKegiatan->id,
            'tahun_ke_0' => $request->target_capaian_tahun['tahun_ke_0'],
            'tahun_ke_1' => $request->target_capaian_tahun['tahun_ke_1'],
            'tahun_ke_2' => $request->target_capaian_tahun['tahun_ke_2'],
            'tahun_ke_3' => $request->target_capaian_tahun['tahun_ke_3'],
            'tahun_ke_4' => $request->target_capaian_tahun['tahun_ke_4'],
            'tahun_ke_5' => $request->target_capaian_tahun['tahun_ke_5'],
            'tahun_ke_6' => $request->target_capaian_tahun['tahun_ke_6'],
        ]);

        LokasiDusun::create([
            'jenis_kegiatan_id' => $jenisKegiatan->id,
            'lokasi' => $request->lokasi_dusun['lokasi'],
            'dusun' => $request->lokasi_dusun['dusun'],
            'satuan' => $request->lokasi_dusun['satuan'],
        ]);

        PenerimaManfaat::create([
            'jenis_kegiatan_id' => $jenisKegiatan->id,
            'penerima_manfaat' => $request->penerima_manfaat,
        ]);

        WaktuPelaksanaan::create([
            'jenis_kegiatan_id' => $jenisKegiatan->id,
            'tahun_2022' => $request->waktu_pelaksanaan['tahun_2022'],
            'tahun_2023' => $request->waktu_pelaksanaan['tahun_2023'],
            'tahun_2024' => $request->waktu_pelaksanaan['tahun_2024'],
            'tahun_2025' => $request->waktu_pelaksanaan['tahun_2025'],
            'tahun_2026' => $request->waktu_pelaksanaan['tahun_2026'],
            'tahun_2027' => $request->waktu_pelaksanaan['tahun_2027'],
        ]);

        PrakiraanBiaya::create([
            'jenis_kegiatan_id' => $jenisKegiatan->id,
            'jumlah' => $request->prakiraan_biaya['jumlah'],
            'sumber_dana' => $request->prakiraan_biaya['sumber_dana'],
            'swakelola' => $request->prakiraan_biaya['swakelola'],
            'antara_pihak' => $request->prakiraan_biaya['antara_pihak'],
            'kerjasama_desa' => $request->prakiraan_biaya['kerjasama_desa'],
            'pola_pelaksanaan' => $request->prakiraan_biaya['pola_pelaksanaan'],
        ]);

        return redirect()->route('rpjmdes.index')->with('success', 'Data RPJMDES berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $rpjmdes = JenisKegiatan::with([
            'subBidang.bidang', 
            'targetCapaianTahuns', 
            'lokasiDusuns', 
            'penerimaManfaats', 
            'waktuPelaksanaans', 
            'prakirakanBiayas'
        ])->findOrFail($id);
        $bidangs = Bidang::all();
        $subBidangs = SubBidang::all();
        return view('rpjmdes.edit', compact('rpjmdes', 'bidangs', 'subBidangs'));
    }

    public function destroy($id)
    {
        $rpjmdes = JenisKegiatan::findOrFail($id);
        $rpjmdes->targetCapaianTahuns()->delete();
        $rpjmdes->lokasiDusuns()->delete();
        $rpjmdes->penerimaManfaats()->delete();
        $rpjmdes->waktuPelaksanaans()->delete();
        $rpjmdes->prakirakanBiayas()->delete();
        $rpjmdes->delete();

        return redirect()->route('rpjmdes.index')->with('success', 'Data RPJMDES berhasil dihapus.');
    }
}