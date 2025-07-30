<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index()
    {
        $bidang = Bidang::all();
        return view('bidang.index', compact('bidang'));
    }

    public function create()
    {
        return view('bidang.create');
    }

    public function store(Request $request)
    {
        Bidang::create($request->all());
        return redirect()->route('bidang.index');
    }

    public function show(Bidang $bidang)
    {
        return view('bidang.show', compact('bidang'));
    }

    public function edit(Bidang $bidang)
    {
        return view('bidang.edit', compact('bidang'));
    }

    public function update(Request $request, Bidang $bidang)
    {
        $bidang->update($request->all());
        return redirect()->route('bidang.index');
    }

    public function destroy(Bidang $bidang)
    {
        $bidang->delete();
        return redirect()->route('bidang.index');
    }
}