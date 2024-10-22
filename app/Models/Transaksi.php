<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'barang_id', 
        'jumlah_transaksi',
        'tanggal_transaksi',
    ];
    // Relasi Many-to-Many
    public function barang()
    {
        return $this->belongsToMany(Barang::class);
    }
}