<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHubungikamisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hubungikamis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_pelanggan')->unsigned();
            $table->foreign('id_pelanggan')->references('id')->on('pelanggans');
            $table->string('nama');
            $table->string('email');
            $table->string('nomorponsel');
            $table->string('topik');
            $table->text('pesan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hubungikamis');
        $table->dropForeign('hubungikamis_id_pelanggan_foreign');
    }
}
