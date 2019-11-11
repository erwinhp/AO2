<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterRab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('master_rab', function (Blueprint $table) {
      $table->string('no_rab')->unique();
      $table->date('tgl_rab')->nullable();
      $table->string('no_prk',25)->nullable();
      $table->string('program')->nullable();
      $table->integer('fungsi')->unsigned();
      $table->string('judul')->nullable();
      $table->integer('kode_lokasi')->unsigned();
      $table->string('triwulan')->nullable();
      $table->integer('surveyor_1')->unsigned();
      $table->integer('surveyor_2')->unsigned();
      $table->string('rab_nama')->nullable();
      $table->string('flag_rab')->nullable();
      $table->string('nilai_rab')->nullable();
      $table->foreign('surveyor_1')->references('kode_surveyor')->on('surveyor');
      $table->foreign('surveyor_2')->references('kode_surveyor')->on('surveyor');
      $table->foreign('fungsi')->references('id_fungsi')->on('fungsi');
      $table->foreign('kode_lokasi')->references('kode_lokasi')->on('lokasi');
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
