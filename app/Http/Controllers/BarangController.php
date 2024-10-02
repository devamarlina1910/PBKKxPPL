<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    // Method untuk menampilkan seluruh data barang
    public function index()
    {
        // Mengambil semua data dari tabel barang
        $barang = Barang::all();

        // Mengirim data ke view index
        return view('barang.index', compact('barang'));
    }
    public function create()
{
    return view('barang.create');
}
public function store(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'nama_barang' => 'required|string|max:255',
        'stok' => 'required|integer',
        'kategori' => 'required|in:elektronik,fashion,alat_tulis,rumah_tangga,lainnya',
        'tanggal_masuk' => 'required|date',
        'tersedia' => 'required|boolean',
    ]);

    // Simpan data ke database
    Barang::create($validated);

    // Redirect ke halaman daftar barang dengan pesan sukses
    return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan');
}
}