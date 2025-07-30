<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Excel;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;
use PDF;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::with('polaPelaksanaan')->get();
        return view('laporan.index', compact('laporan'));
    }

    public function create()
    {
        $polaPelaksanaan = \App\Models\PolaPelaksanaan::all();
        return view('laporan.create', compact('polaPelaksanaan'));
    }

    public function store(Request $request)
    {
        Laporan::create($request->all());
        return redirect()->route('laporan.index');
    }

    public function show(Laporan $laporan)
    {
        return view('laporan.show', compact('laporan'));
    }

    public function edit(Laporan $laporan)
    {
        $polaPelaksanaan = \App\Models\PolaPelaksanaan::all();
        return view('laporan.edit', compact('laporan', 'polaPelaksanaan'));
    }

    public function update(Request $request, Laporan $laporan)
    {
        $laporan->update($request->all());
        return redirect()->route('laporan.index');
    }

    public function destroy(Laporan $laporan)
    {
        $laporan->delete();
        return redirect()->route('laporan.index');
    }

    public function exportExcel()
    {
        $laporan = Laporan::with('polaPelaksanaan')->get();
        return FacadesExcel::download(new \App\Exports\LaporanExport($laporan), 'laporan.xlsx');
    }

    public function exportPdf()
    {
        $laporan = Laporan::with('polaPelaksanaan')->get();
        $pdf = PDF::loadView('laporan.pdf', compact('laporan'));
        return $pdf->download('laporan.pdf');
    }

    public function print()
    {
        $laporan = Laporan::with('polaPelaksanaan')->get();
        return view('laporan.print', compact('laporan'));
    }
}