<?php 
  
 namespace Database\Seeders; 
  
 // use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
 use App\Models\Transaksi; 
 use Illuminate\Database\Seeder; 

use App\Models\Barang;
use Carbon\Carbon;
  
 class DatabaseSeeder extends Seeder 
 { 
     /** 
      * Seed the application's database. 
      */ 
     public function run(): void 
     { 
         // Membuat Barang
    $barang1 = Barang::create([
        'nama_barang' => 'Laptop',
        'stok' => 10,
        'kategori' => 'elektronik',
        'tanggal_masuk' => Carbon::now(),
        'tersedia' => 1
    ]);

    $barang2 = Barang::create([
        'nama_barang' => 'Mouse',
        'stok' => 15,
        'kategori' => 'elektronik',
        'tanggal_masuk' => Carbon::now(),
        'tersedia' => 1
    ]);

    // Membuat Transaksi
    $transaksi1 = Transaksi::create([
        'barang_id' => $barang1->id,
        'jumlah_transaksi' => 1,
        'tanggal_transaksi' => Carbon::now()
    ]);

    $transaksi2 = Transaksi::create([
        'barang_id' => $barang2->id,
        'jumlah_transaksi' => 1,
        'tanggal_transaksi' => Carbon::now()
    ]);
}}