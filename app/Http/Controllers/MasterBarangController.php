<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class MasterBarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('master-barang.index', compact('barang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kode' => 'required|string|max:255',
            'kategori_id' => 'required|integer',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        Barang::create($request->all());

        return redirect()->route('master-barang')->with('success', 'Barang berhasil ditambahkan.');
    }
}
