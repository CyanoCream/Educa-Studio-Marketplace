<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_produks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('kategori');
            $table->string('nama_produk',255);
            $table->integer('harga_produk');
            $table->string('status_pertemuan');
            $table->string('stock');
            $table->string('pertemuan');
            $table->integer('waktu_temu');
            $table->string('umur');
            $table->string('keterangan');
            $table->string('manfaat');
            $table->string('bundling');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_produks');
    }
}
