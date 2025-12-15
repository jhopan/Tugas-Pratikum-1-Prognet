<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Menampilkan semua produk
    public function index()
    {
        $produks = Produk::all();
        return view('produks.index', compact('produks'));
    }

    // Menampilkan form untuk membuat produk baru
    public function create()
    {
        return view('produks.create');
    }

    // Menyimpan produk baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        Produk::create($request->all());

        return redirect()->route('produks.index')
                       ->with('success', 'Produk created successfully.');
    }

    // Menampilkan form untuk mengedit produk
    public function edit(Produk $produk)
    {
        return view('produks.edit', compact('produk'));
    }

    // Memperbarui produk yang ada
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $produk->update($request->all());

        return redirect()->route('produks.index')
                       ->with('success', 'Produk updated successfully.');
    }

    // Menghapus produk
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produks.index')
                       ->with('success', 'Produk deleted successfully.');
    }
}
