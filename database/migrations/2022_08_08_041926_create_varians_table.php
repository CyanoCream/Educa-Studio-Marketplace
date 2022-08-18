<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('varians', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_produk')->unsigned();
            $table->foreign('id_produk')->references('id')->on('produks');
            $table->string('nama_varian');
            $table->integer('stock_varian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('varians');
        $table->dropForeign('varians_id_produk_foreign');
    }
}
