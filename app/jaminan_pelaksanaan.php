<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jaminan_pelaksanaan extends Model
{
  protected $table = "jaminan_pelaksanaan";
  public $timestamps= false;
  protected $primaryKey = 'id_jamlak';
  protected $fillable = ['id_jamlak','no_rab','no_lak','tanggal_lak','nilai_lak','penerbit_lak'];
}
