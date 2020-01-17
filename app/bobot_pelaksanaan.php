<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bobot_pelaksanaan extends Model
{
  protected $table = "bobot_pelaksanaan";
  public $timestamps= false;
  protected $fillable = ['id_bobot','no_rab','uraian','volume_spbj','volume_cek','tanggal_cek','kodebanyak'];
}
