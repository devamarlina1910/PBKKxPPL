<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'barang';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nama_barang',
        'stok',
        'kategori',
        'tanggal_masuk',
        'tersedia',
    ];

    // Jika Anda tidak menggunakan kolom timestamps seperti created_at dan updated_at, tambahkan ini:
    // public $timestamps = false;
}