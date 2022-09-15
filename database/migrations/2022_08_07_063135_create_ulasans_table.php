<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUlasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ulasans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_user');
            $table->string('nama');
            $table->string('email');
            $table->string('penilaian');
            $table->integer('bintang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ulasans');
    }
}
