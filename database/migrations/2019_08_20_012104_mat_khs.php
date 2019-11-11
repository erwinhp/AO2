<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MatKhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mat_khs', function (Blueprint $table) {


      $table->increments('kode_matkhs');
      $table->string('uraian_matkhs',80)->nullable();
      $table->string('satuan_matkhs',15)->nullable();
      $table->integer('harga_matkhs')->nullable();
      $table->integer('PLN')->nullable();
      $table->integer('PFK')->nullable();
      $table->string('keterangan_matkhs')->nullable();

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
