<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RabKhsDetil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
Schema::create('rab_khs_detil', function (Blueprint $table) {
$table->string('uraian',80)->nullable();
$table->integer('jumlah')->nullable();
$table->string('satuan')->nullable();
$table->integer('harga_satuan')->nullable();
$table->string('material_PLN')->nullable();
$table->string('material_PFK')->nullable();
$table->integer('total_mat')->nullable();
$table->integer('total_jasa')->nullable();
$table->integer('total_biaya')->nullable();
$table->string('no_rab')->nullable();
$table->foreign('no_rab')->references('no_rab')->on('master_rab');
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
