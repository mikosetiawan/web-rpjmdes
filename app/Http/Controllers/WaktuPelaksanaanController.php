<?php

namespace App\Http\Controllers;

use App\Models\WaktuPelaksanaan;
use Illuminate\Http\Request;

class WaktuPelaksanaanController extends Controller
{
    public function index()
    {
        $waktuPelaksanaan = WaktuPelaksanaan::with('jenisKegiatan')->get();
        return view('waktu-pelaksanaan.index', compact('waktuPelaksanaan'));
    }

    public function create()
    {
        $jenisKegiatan = \App\Models\JenisKegiatan::all();
        return view('waktu-pelaksanaan.create', compact('jenisKegiatan'));
    }

    public function store(Request $request)
    {
        WaktuPelaksanaan::create($request->all());
        return redirect()->route('waktu-pelaksanaan.index');
    }

    public function show(WaktuPelaksanaan $waktuPelaksanaan)
    {
        return view('waktu-pelaksanaan.show', compact('waktuPelaksanaan'));
    }

    public function edit(WaktuPelaksanaan $waktuPelaksanaan)
    {
        $jenisKegiatan = \App\Models\JenisKegiatan::all();
        return view('waktu-pelaksanaan.edit', compact('waktuPelaksanaan', 'jenisKegiatan'));
    }

    public function update(Request $request, WaktuPelaksanaan $waktuPelaksanaan)
    {
        $waktuPelaksanaan->update($request->all());
        return redirect()->route('waktu-pelaksanaan.index');
    }

    public function destroy(WaktuPelaksanaan $waktuPelaksanaan)
    {
        $waktuPelaksanaan->delete();
        return redirect()->route('waktu-pelaksanaan.index');
    }
}