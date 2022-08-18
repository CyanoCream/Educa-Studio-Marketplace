<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_order')->unsigned();
            $table->foreign('id_order')->references('id')->on('orders');
            $table->integer('id_produk')->unsigned();
            $table->foreign('id_produk')->references('id')->on('produks');
            $table->integer('id_varian_order');
            $table->integer('qty_order');
            // $table->string('nama_produk_order');
            // $table->string('harga_produk_order');
            // $table->string('varian_produk_order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_orders');
        $table->dropForeign('detail_orders_id_produk_foreign');
        $table->dropForeign('detail_orders_id_order_foreign');
    }
}
