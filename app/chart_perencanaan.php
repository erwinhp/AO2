<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chart_perencanaan extends Model
{
  protected $table = "chart_perencanaan";
  public $timestamps= false;
  protected $primaryKey = 'id_chartren';
  protected $fillable = ['id_chartren','no_rab','tgl_progress','jumlah_progress'];
}
