<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('prk', function (Blueprint $table) {
   $table->string('no_prk')->unique();
   $table->string('nama_prk');
   $table->biginteger('pagu')->nullable();
   $table->integer('id_fungsi')->unsigned();
   $table->foreign('id_fungsi')->references('id_fungsi')->on('fungsi');
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
