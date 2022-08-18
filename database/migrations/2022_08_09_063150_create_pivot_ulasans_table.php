<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotUlasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_ulasans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_ulasan')->unsigned();
            $table->foreign('id_ulasan')->references('id')->on('ulasans');
            $table->integer('id_produk')->unsigned();
            $table->foreign('id_produk')->references('id')->on('produks');
            $table->integer('id_pelanggan')->unsigned();
            $table->foreign('id_pelanggan')->references('id')->on('pelanggans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_ulasans');
        $table->dropForeign('pivot_ulasans_id_produk_foreign');
        $table->dropForeign('pivot_ulasans_id_pelanggan_foreign');
        $table->dropForeign('pivot_ulasans_id_ulasan_foreign');
    }
}