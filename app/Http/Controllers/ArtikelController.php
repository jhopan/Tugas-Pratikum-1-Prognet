<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    // Menampilkan semua artikel
    public function index()
    {
        $artikels = Artikel::all();
        return view('artikels.index', compact('artikels'));
    }

    // Menampilkan form untuk membuat artikel baru
    public function create()
    {
        return view('artikels.create');
    }

    // Menyimpan artikel baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
            'tanggal_terbit' => 'required|date',
        ]);

        Artikel::create($request->all());

        return redirect()->route('artikels.index')
                       ->with('success', 'Artikel created successfully.');
    }

    // Menampilkan form untuk mengedit artikel
    public function edit(Artikel $artikel)
    {
        return view('artikels.edit', compact('artikel'));
    }

    // Memperbarui artikel yang ada
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
            'tanggal_terbit' => 'required|date',
        ]);

        $artikel->update($request->all());

        return redirect()->route('artikels.index')
                       ->with('success', 'Artikel updated successfully.');
    }

    // Menghapus artikel
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect()->route('artikels.index')
                       ->with('success', 'Artikel deleted successfully.');
    }
}
