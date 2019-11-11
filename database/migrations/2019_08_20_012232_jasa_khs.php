<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JasaKhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('jasa_khs', function (Blueprint $table) {
      $table->increments('kode_jasa');
      $table->string('uraian_jasa',80)->nullable();
      $table->string('satuan_jasa',15)->nullable();
      $table->integer('harga_jasa')->nullable();
      $table->string('keterangan_jasa')->nullable();

});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
