<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $fillable = [
        'nama_barang',
        'stok',
        'kategori',
        'tanggal_masuk',
        'tersedia',
    ];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}