<?php

namespace App\Http\Controllers;

use App\Models\BatuPermata;
use Illuminate\Http\Request;

class BatuPermataController extends Controller
{
    public function index()
    {
        $data = BatuPermata::all();
        return view('batu.index', compact('data'));
    }

    public function create()
    {
        return view('batu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'berat' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        BatuPermata::create($request->all());

        return redirect()->route('batu.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = BatuPermata::findOrFail($id);
        return view('batu.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'berat' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        $data = BatuPermata::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('batu.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        BatuPermata::destroy($id);
        return redirect()->route('batu.index')->with('success', 'Data berhasil dihapus');
    }
}