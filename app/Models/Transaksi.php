<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = [
        'barang_id', // Kolom ini adalah foreign key yang mengacu pada tabel barangs
        'jumlah_transaksi',
        'tanggal_transaksi',
    ];

    // Relasi One to Many
    public function barangs()
    {
        return $this->belongsTo(Barang::class);
    }
}