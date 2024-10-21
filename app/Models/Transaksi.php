<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'barang_id', // Kolom ini adalah foreign key yang mengacu pada tabel barangs
        'jumlah',
        'tanggal_transaksi',
    ];
    // Relasi Many-to-One
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}