<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kontrak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('kontrak', function (Blueprint $table) {
      $table->string('no_spbj')->nullable();
      $table->string('no_prk',20);
      $table->string('no_skk',35)->nullable();
      $table->integer('id_pekerjaan')->nullable();
      $table->string('pekerjaan',255)->nullable();
      $table->date('tanggal_spbj')->nullable();
      $table->date('tanggal_akhir')->nullable();
      $table->string('akhir_pemeliharaan')->nullable();
      $table->string('aktif_spbj')->nullable();
      $table->string('vendor')->nullable();
      $table->integer('material_kontrak')->nullable();
      $table->integer('jasa_kontrak')->nullable();
      $table->integer('total_kontrak')->nullable();
      $table->integer('material_bayar')->nullable();
      $table->integer('jasa_bayar')->nullable();
      $table->integer('total_bayar')->nullable();
      $table->string('aktif_bastp',20)->nullable();
      $table->string('aktif_byr',20)->nullable();
      $table->foreign('no_prk')->references('no_prk')->on('prk');

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
