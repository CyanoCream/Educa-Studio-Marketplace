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
        Schema::create('tbl_detail_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_order')->unsigned();
            $table->foreign('id_order')->references('id')->on('tbl_orders');
            $table->integer('id_produk')->unsigned();
            $table->foreign('id_produk')->references('id')->on('tbl_produks');
            $table->integer('id_user');
            $table->integer('status_order');
            $table->string('nama_produk');
            $table->integer('harga');
            $table->string('kurir');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->string('pembayaran');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_detail_orders');
        $table->dropForeign('detail_orders_id_produk_foreign');
        $table->dropForeign('detail_orders_id_order_foreign');
    }
}
