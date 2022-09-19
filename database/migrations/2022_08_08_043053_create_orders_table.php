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
        Schema::create('tbl_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->boolean('status_order')->default(0);
            $table->integer('id_produk')->unsigned();
            $table->foreign('id_produk')->references('id')->on('tbl_produks');
            $table->integer('id_penyelenggara')->unsigned();
            $table->foreign('id_penyelenggara')->references('id')->on('tbl_penyelenggaras');
            $table->integer('id_user');
            $table->integer('jumlah_pesanan');
            $table->char('total_harga');
            $table->string('kurir');
            $table->string('alamat_pen');
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('metode_pembayaran')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_orders');
        $table->dropForeign('tbl_penyelenggaras_id_produk_foreign');
        $table->dropForeign('tbl_penyelenggaras_id_pelanggan_foreign');
        $table->dropForeign('tbl_penyelenggaras_id_penyelenggara_foreign');
    }
}
