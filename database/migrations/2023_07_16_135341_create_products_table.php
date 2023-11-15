<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_umkm');
            $table->string('nama_produk');
            $table->string('kategori');
            $table->float('harga',24,0);
            $table->text('deskripsi');
            $table->string('nomor_telepon');
            $table->string('link_gmaps');
            $table->string('gambar1');
            $table->string('gambar2');
            $table->string('gambar3');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};