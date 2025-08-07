<?php 


namespace App\Http\Controllers;

use App\Models\TimPenyusun;
use Illuminate\Http\Request;

class TimPenyusunController extends Controller
{
    public function index()
    {
        $timPenyusuns = TimPenyusun::all();
        return view('tim-penyusun.index', compact('timPenyusuns'));
    }

    public function create()
    {
        return view('tim-penyusun.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan_dalam_tim' => 'required|string|max:255',
            'jabatan_bidang' => 'nullable|string|max:255',
        ]);

        TimPenyusun::create($validated);

        return redirect()->route('tim-penyusun.index')->with('success', 'Tim penyusun berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $timPenyusun = TimPenyusun::findOrFail($id);
        return view('tim-penyusun.edit', compact('timPenyusun'));
    }

    public function update(Request $request, $id)
    {
        $timPenyusun = TimPenyusun::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan_dalam_tim' => 'required|string|max:255',
            'jabatan_bidang' => 'nullable|string|max:255',
        ]);

        $timPenyusun->update($validated);

        return redirect()->route('tim-penyusun.index')->with('success', 'Tim penyusun berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $timPenyusun = TimPenyusun::findOrFail($id);
        $timPenyusun->delete();

        return redirect()->route('tim-penyusun.index')->with('success', 'Tim penyusun berhasil dihapus.');
    }
}