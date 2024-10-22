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
         // \App\Models\User::factory(10)->create(); 
  
         // \App\Models\User::factory()->create([ 
         //     'name' => 'Test User', 
         //     'email' => 'test@example.com', 
         // ]); 
     
         
    //membuat barang pertama  
     $barang1 = Barang::create([ 
         'nama_barang' => 'Laptop', 
         'stok' => 10, 
         'kategori' => 'elektronik', 
         'tanggal_masuk' => Carbon::now(), 
         'tersedia' => 1 
     ]); 
     
    //membuat barang kedua  
     $barang2 = Barang::create([ 
         'nama_barang' => 'Mouse', 
         'stok' => 15, 
         'kategori' => 'elektronik', 
         'tanggal_masuk' => Carbon::now(), 
         'tersedia' => 1 
     ]);
     
    //membuat transaksi pertama
     $transaksi2 = Transaksi::create([ 

        'barang_id' => $barang2->id, 
        'jumlah_transaksi' => 1, 
        'tanggal_transaksi' => Carbon::now()
    ]);
    
    //membuat transaksi kedua
     $transaksi1 = Transaksi::create([ 
        'barang_id' => $barang1->id, 
        'jumlah_transaksi' => 1, 
        'tanggal_transaksi' => Carbon::now()
    ]);

   //barang1, barang2
    $barang1->transaksis()->attach($barang1);
    $barang1->transaksis()->attach($barang1);
    $barang1->transaksis()->attach($barang2);
    
    $transaksi1->barangs()->attach($barang2);
    
    $transaksi2->barangs()->attach($barang1);
    $transaksi2->barangs()->attach($barang2);
}}