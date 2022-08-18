<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('foto');
            $table->datetIme('waktu_daftar');
            $table->string('nama_pelanggan');
            $table->string('email_pelanggan');
            $table->string('password');
            $table->string('no_telp');
            $table->string('alamat_pel');
            $table->string('provinsi_pel');
            $table->string('kota_pel');
            $table->string('kecamatan_pel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggans');
    }
}