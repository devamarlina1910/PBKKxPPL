<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            ['nama_barang' => 'Mug Keramik', 'stok' => 50, 'kategori' => 'rumah_tangga', 'tanggal_masuk' => Carbon::now(), 'tersedia' => true],
            ['nama_barang' => 'Balpoint', 'stok' => 200, 'kategori' => 'alat_tulis', 'tanggal_masuk' => Carbon::now(), 'tersedia' => true],
            ['nama_barang' => 'Bantal Travel', 'stok' => 30, 'kategori' => 'fashion', 'tanggal_masuk' => Carbon::now(), 'tersedia' => true],
            ['nama_barang' => 'Payung', 'stok' => 40, 'kategori' => 'rumah_tangga', 'tanggal_masuk' => Carbon::now(), 'tersedia' => true],
            ['nama_barang' => 'Trucker Hat', 'stok' => 25, 'kategori' => 'fashion', 'tanggal_masuk' => Carbon::now(), 'tersedia' => true],
            ['nama_barang' => 'Balpoint', 'stok' => 150, 'kategori' => 'alat_tulis', 'tanggal_masuk' => Carbon::now(), 'tersedia' => true],
            ['nama_barang' => 'Tumbler Sport', 'stok' => 60, 'kategori' => 'lainnya', 'tanggal_masuk' => Carbon::now(), 'tersedia' => true],
            ['nama_barang' => 'Lanyard UNIB', 'stok' => 100, 'kategori' => 'fashion', 'tanggal_masuk' => Carbon::now(), 'tersedia' => true],
            ['nama_barang' => 'Jam Dinding', 'stok' => 15, 'kategori' => 'rumah_tangga', 'tanggal_masuk' => Carbon::now(), 'tersedia' => true],
            ['nama_barang' => 'Totebag', 'stok' => 35, 'kategori' => 'fashion', 'tanggal_masuk' => Carbon::now(), 'tersedia' => true],
            ['nama_barang' => 'Notebook', 'stok' => 120, 'kategori' => 'alat_tulis', 'tanggal_masuk' => Carbon::now(), 'tersedia' => true],
            ['nama_barang' => 'Stiker', 'stok' => 300, 'kategori' => 'lainnya', 'tanggal_masuk' => Carbon::now(), 'tersedia' => true],
        ]);
    }
}