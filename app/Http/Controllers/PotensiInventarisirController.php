<?php 


namespace App\Http\Controllers;

use App\Models\PotensiInventarisir;
use Illuminate\Http\Request;

class PotensiInventarisirController extends Controller
{
    public function index()
    {
        $potensiInventarisirs = PotensiInventarisir::all();
        return view('potensi-inventarisir.index', compact('potensiInventarisirs'));
    }

    public function create()
    {
        return view('potensi-inventarisir.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'potensi' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
        ]);

        PotensiInventarisir::create($validated);

        return redirect()->route('potensi-inventarisir.index')->with('success', 'Potensi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $potensiInventarisir = PotensiInventarisir::findOrFail($id);
        return view('potensi-inventarisir.edit', compact('potensiInventarisir'));
    }

    public function update(Request $request, $id)
    {
        $potensiInventarisir = PotensiInventarisir::findOrFail($id);

        $validated = $request->validate([
            'potensi' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
        ]);

        $potensiInventarisir->update($validated);

        return redirect()->route('potensi-inventarisir.index')->with('success', 'Potensi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $potensiInventarisir = PotensiInventarisir::findOrFail($id);
        $potensiInventarisir->delete();

        return redirect()->route('potensi-inventarisir.index')->with('success', 'Potensi berhasil dihapus.');
    }
}