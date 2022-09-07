<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_produk')->unsigned();
            $table->foreign('id_produk')->references('id')->on('produks');
            $table->string('tgl_lahir');
            $table->string('nama_peserta');
            $table->string('nama_panggilan');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('hubungan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesertas');
        $table->dropForeign('pesertas_id_produk_foreign');
    }
}
