<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayarans extends Model
{
  protected $table = "pembayaran";
  public $timestamps= false;
  protected $primaryKey = 'id_bayar';
  protected $fillable = ['id_bayar','tanggal_bayar','jasa_bayar','material_bayar',
  'total_bayar','no_rab','no_prk'];

}
