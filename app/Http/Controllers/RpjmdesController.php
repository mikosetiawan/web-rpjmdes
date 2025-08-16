<?php

namespace App\Http\Controllers;

use App\Models\Rpjmdes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RpjmdesController extends Controller
{
    public function index()
    {
        $rpjmdes = Rpjmdes::all();
        return view('rpjmdes.index', compact('rpjmdes'));
    }

    public function create()
    {
        return view('rpjmdes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_bidang' => 'required|string|max:255',
            'nama_sub_bidang' => 'required|array',
            'nama_sub_bidang.*' => 'required|string|max:255',
            'nama_program_kegiatan' => 'required|string|max:255',
            'sdgs_ke' => 'nullable|string|max:255',
            'data_existing_tahun_ke' => 'nullable|string|max:255',
            'tahun_ke_0' => 'nullable|integer',
            'tahun_ke_1' => 'nullable|integer',
            'tahun_ke_2' => 'nullable|integer',
            'tahun_ke_3' => 'nullable|integer',
            'tahun_ke_4' => 'nullable|integer',
            'tahun_ke_5' => 'nullable|integer',
            'tahun_ke_6' => 'nullable|integer',
            'lokasi' => 'nullable|string|max:255',
            'dusun' => 'nullable|string|max:255',
            'satuan' => 'nullable|string|max:255',
            'penerima_manfaat' => 'nullable|string|max:255',
            'tahun_2022' => 'nullable|integer|min:1900|max:2100',
            'tahun_2023' => 'nullable|integer|min:1900|max:2100',
            'tahun_2024' => 'nullable|integer|min:1900|max:2100',
            'tahun_2025' => 'nullable|integer|min:1900|max:2100',
            'tahun_2026' => 'nullable|integer|min:1900|max:2100',
            'tahun_2027' => 'nullable|integer|min:1900|max:2100',
            'jumlah' => 'nullable|numeric|min:0',
            'sumber_dana' => 'nullable|string|max:255',
            'swakelola' => 'nullable|string|max:255',
            'kerjasama_desa' => 'nullable|string|max:255',
            'kerjasama_pihak_ketiga' => 'nullable|string|max:255',
        ]);

        try {
            $validated['nama_sub_bidang'] = array_map('trim', $validated['nama_sub_bidang']);
            Rpjmdes::create($validated);
            return redirect()->route('rpjmdes.index')->with('success', 'Data RPJMDES berhasil ditambahkan.');
        } catch (\Exception $e) {
            Log::error('Error storing RPJMDES: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menambahkan data RPJMDES.')->withInput();
        }
    }

    public function edit(Rpjmdes $rpjmdes)
    {
        return view('rpjmdes.edit', compact('rpjmdes'));
    }

    public function update(Request $request, Rpjmdes $rpjmdes)
    {
        $validated = $request->validate([
            'nama_bidang' => 'required|string|max:255',
            'nama_sub_bidang' => 'required|array',
            'nama_sub_bidang.*' => 'required|string|max:255',
            'nama_program_kegiatan' => 'required|string|max:255',
            'sdgs_ke' => 'nullable|string|max:255',
            'data_existing_tahun_ke' => 'nullable|string|max:255',
            'tahun_ke_0' => 'nullable|integer',
            'tahun_ke_1' => 'nullable|integer',
            'tahun_ke_2' => 'nullable|integer',
            'tahun_ke_3' => 'nullable|integer',
            'tahun_ke_4' => 'nullable|integer',
            'tahun_ke_5' => 'nullable|integer',
            'tahun_ke_6' => 'nullable|integer',
            'lokasi' => 'nullable|string|max:255',
            'dusun' => 'nullable|string|max:255',
            'satuan' => 'nullable|string|max:255',
            'penerima_manfaat' => 'nullable|string|max:255',
            'tahun_2022' => 'nullable|integer|min:1900|max:2100',
            'tahun_2023' => 'nullable|integer|min:1900|max:2100',
            'tahun_2024' => 'nullable|integer|min:1900|max:2100',
            'tahun_2025' => 'nullable|integer|min:1900|max:2100',
            'tahun_2026' => 'nullable|integer|min:1900|max:2100',
            'tahun_2027' => 'nullable|integer|min:1900|max:2100',
            'jumlah' => 'nullable|numeric|min:0',
            'sumber_dana' => 'nullable|string|max:255',
            'swakelola' => 'nullable|string|max:255',
            'kerjasama_desa' => 'nullable|string|max:255',
            'kerjasama_pihak_ketiga' => 'nullable|string|max:255',
        ]);

        try {
            $validated['nama_sub_bidang'] = array_map('trim', $validated['nama_sub_bidang']);
            $rpjmdes->update($validated);
            return redirect()->route('rpjmdes.index')->with('success', 'Data RPJMDES berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error('Error updating RPJMDES: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memperbarui data RPJMDES.')->withInput();
        }
    }

    public function destroy(Rpjmdes $rpjmdes)
    {
        try {
            $rpjmdes->delete();
            return redirect()->route('rpjmdes.index')->with('success', 'Data RPJMDES berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error('Error deleting RPJMDES: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menghapus data RPJMDES.');
        }
    }

    public function print()
    {
        $desa = "Wanakarta";
        $rpjmdes = Rpjmdes::all();
        return view('rpjmdes.print', compact('rpjmdes','desa'));
    }
}