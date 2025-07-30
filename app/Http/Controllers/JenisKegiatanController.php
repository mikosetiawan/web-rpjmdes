<?php

namespace App\Http\Controllers;

use App\Models\JenisKegiatan;
use Illuminate\Http\Request;

class JenisKegiatanController extends Controller
{
    public function index()
    {
        $jenisKegiatan = JenisKegiatan::with('subBidang')->get();
        return view('jenis-kegiatan.index', compact('jenisKegiatan'));
    }

    public function create()
    {
        $subBidang = \App\Models\SubBidang::all();
        return view('jenis-kegiatan.create', compact('subBidang'));
    }

    public function store(Request $request)
    {
        JenisKegiatan::create($request->all());
        return redirect()->route('jenis-kegiatan.index');
    }

    public function show(JenisKegiatan $jenisKegiatan)
    {
        return view('jenis-kegiatan.show', compact('jenisKegiatan'));
    }

    public function edit(JenisKegiatan $jenisKegiatan)
    {
        $subBidang = \App\Models\SubBidang::all();
        return view('jenis-kegiatan.edit', compact('jenisKegiatan', 'subBidang'));
    }

    public function update(Request $request, JenisKegiatan $jenisKegiatan)
    {
        $jenisKegiatan->update($request->all());
        return redirect()->route('jenis-kegiatan.index');
    }

    public function destroy(JenisKegiatan $jenisKegiatan)
    {
        $jenisKegiatan->delete();
        return redirect()->route('jenis-kegiatan.index');
    }
}