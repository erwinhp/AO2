<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RabKontrakDetil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('rab_kontrak_detil', function (Blueprint $table) {
      $table->string('no_rab');
      $table->string('Uraian_jasa',80)->nullable();
      $table->string('Satuan_jasa',15)->nullable();
      $table->integer('Harga_jasa')->nullable();
      $table->string('Keterangan_jasa')->nullable();

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
