<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_pelanggan')->unsigned();
            $table->foreign('id_pelanggan')->references('id')->on('pelanggans');
            $table->boolean('status_order')->default(0);
            $table->integer('id_produk')->unsigned();
            $table->foreign('id_produk')->references('id')->on('produks');
            $table->integer('id_penyelenggara')->unsigned();
            $table->foreign('id_penyelenggara')->references('id')->on('penyelenggaras');
            $table->integer('jumlah_pesanan');
            $table->string('kurir');
            $table->string('alamat_pen');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        $table->dropForeign('penyelenggaras_id_produk_foreign');
        $table->dropForeign('penyelenggaras_id_pelanggan_foreign');
        $table->dropForeign('penyelenggaras_id_penyelenggara_foreign');
    }
}
