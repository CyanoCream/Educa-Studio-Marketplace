<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyelenggarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyelenggaras', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_produk')->unsigned();
            $table->foreign('id_produk')->references('id')->on('produks');
            $table->string('nama_penyelenggara');
            $table->string('kota_penyelenggara');
            $table->string('deskripsi');
            $table->string('jam_operasional');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyelenggaras');
        $table->dropForeign('penyelenggaras_id_produk_foreign');
    }
}
