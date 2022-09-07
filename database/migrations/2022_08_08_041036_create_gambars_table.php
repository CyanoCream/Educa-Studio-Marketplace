<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGambarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_gambars', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('gambar');
            $table->integer('id_produk')->unsigned();
            $table->foreign('id_produk')->references('id')->on('tbl_produks');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_gambars');
        $table->dropForeign('tbl_gambars_id_produk_foreign');
    }
}
