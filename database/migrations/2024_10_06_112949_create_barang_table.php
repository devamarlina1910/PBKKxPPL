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
            $table->string('nama_barang');            
            $table->integer('stok');                  
            $table->enum('kategori', ['elektronik', 'fashion', 'alat_tulis', 'rumah_tangga', 'lainnya']); // Tipe data enum
            $table->date('tanggal_masuk');            
            $table->boolean('tersedia');              
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang');
    }
}