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
            $table->string('nama_produk',255);
            // $table->integer('id_penyelenggara')->unsigned();
            // $table->foreign('id_penyelenggara')->references('id')->on('tbl_penyelenggaras');
            $table->string('kategori');
            $table->char('harga_produk');
            $table->string('status_pertemuan');
            $table->integer('stock');
            $table->string('pertemuan');
            $table->integer('waktu_temu');
            $table->string('umur');
            $table->string('keterangan');
            $table->string('manfaat');
            $table->string('bundling');
            $table->string('user_id')->nullable();
            // $table->integer('id_ulasan')->unsigned();
            // $table->foreign('id_ulasan')->references('id')->on('tbl_ulasans');

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
        $table->dropForeign('tbl_produks_id_penyelenggara_foreign');
        // $table->dropForeign('tbl_produks_id_ulasan_foreign');
    }
}
