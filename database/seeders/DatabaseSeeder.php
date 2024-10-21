<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Transaksi;
use Illuminate\Database\Seeder;

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
    }

    $barang1 = Barang::create([
        'nama_barang' => 'Laptop',
        'stok' => 10,
        'kategori' => 'elektronik',
        'tanggal_masuk' => Carbon::now(),
        'tersedia' => 1
    ]);
    Transaksi::create([
        'id_barang' => $barang1->id,
        'id_user' => 1,
        'status' => 'dipinjam'
    ]);
}