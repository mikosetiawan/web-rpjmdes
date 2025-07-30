<?php

namespace App\Http\Controllers;

use App\Models\PolaPelaksanaan;
use Illuminate\Http\Request;

class PolaPelaksanaanController extends Controller
{
    public function index()
    {
        $polaPelaksanaan = PolaPelaksanaan::with('waktuPelaksanaan')->get();
        return view('pola-pelaksanaan.index', compact('polaPelaksanaan'));
    }

    public function create()
    {
        $waktuPelaksanaan = \App\Models\WaktuPelaksanaan::all();
        return view('pola-pelaksanaan.create', compact('waktuPelaksanaan'));
    }

    public function store(Request $request)
    {
        PolaPelaksanaan::create($request->all());
        return redirect()->route('pola-pelaksanaan.index');
    }

    public function show(PolaPelaksanaan $polaPelaksanaan)
    {
        return view('pola-pelaksanaan.show', compact('polaPelaksanaan'));
    }

    public function edit(PolaPelaksanaan $polaPelaksanaan)
    {
        $waktuPelaksanaan = \App\Models\WaktuPelaksanaan::all();
        return view('pola-pelaksanaan.edit', compact('polaPelaksanaan', 'waktuPelaksanaan'));
    }

    public function update(Request $request, PolaPelaksanaan $polaPelaksanaan)
    {
        $polaPelaksanaan->update($request->all());
        return redirect()->route('pola-pelaksanaan.index');
    }

    public function destroy(PolaPelaksanaan $polaPelaksanaan)
    {
        $polaPelaksanaan->delete();
        return redirect()->route('pola-pelaksanaan.index');
    }
}