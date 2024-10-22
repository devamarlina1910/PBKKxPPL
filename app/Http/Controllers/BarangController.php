<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    // Method untuk menampilkan seluruh data barang
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'stok' => 'required|integer',
            'kategori' => 'required|in:elektronik,fashion,alat_tulis,rumah_tangga,lainnya',
            'tanggal_masuk' => 'required|date',
            'tersedia' => 'required|boolean',
        ]);

        $barang = Barang::create($validated);
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan');
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'stok' => 'required|integer',
            'kategori' => 'required|in:elektronik,fashion,alat_tulis,rumah_tangga,lainnya',
            'tanggal_masuk' => 'required|date',
            'tersedia' => 'required|boolean',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($validated);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus');
    }

    public function show($id)
    {
        $barang = Barang::with('transaksis')->findOrFail($id);
        return view('barang.show', compact('barang'));
    }
}
    