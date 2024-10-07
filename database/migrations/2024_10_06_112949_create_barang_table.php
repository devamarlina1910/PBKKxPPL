<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');            // Tipe data string
            $table->integer('stok');                  // Tipe data number (integer)
            $table->enum('kategori', ['elektronik', 'fashion', 'alat_tulis', 'rumah_tangga', 'lainnya']); // Tipe data enum
            $table->date('tanggal_masuk');            // Tipe data date
            $table->boolean('tersedia');              // Tipe data boolean
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang');
    }
}