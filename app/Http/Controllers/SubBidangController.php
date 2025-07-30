<?php

namespace App\Http\Controllers;

use App\Models\SubBidang;
use Illuminate\Http\Request;

class SubBidangController extends Controller
{
    public function index()
    {
        $subBidang = SubBidang::with('bidang')->get();
        return view('sub-bidang.index', compact('subBidang'));
    }

    public function create()
    {
        $bidang = \App\Models\Bidang::all();
        return view('sub-bidang.create', compact('bidang'));
    }

    public function store(Request $request)
    {
        SubBidang::create($request->all());
        return redirect()->route('sub-bidang.index');
    }

    public function show(SubBidang $subBidang)
    {
        return view('sub-bidang.show', compact('subBidang'));
    }

    public function edit(SubBidang $subBidang)
    {
        $bidang = \App\Models\Bidang::all();
        return view('sub-bidang.edit', compact('subBidang', 'bidang'));
    }

    public function update(Request $request, SubBidang $subBidang)
    {
        $subBidang->update($request->all());
        return redirect()->route('sub-bidang.index');
    }

    public function destroy(SubBidang $subBidang)
    {
        $subBidang->delete();
        return redirect()->route('sub-bidang.index');
    }
}