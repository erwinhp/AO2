<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengawas_dan_direksi extends Model
{
  protected $table = "pengawas_dan_direksi";
  public $timestamps= false;
  protected $primaryKey = 'id_ppd';
  protected $fillable = ['id_pdd','no_rab','nama','jabatan'];
}
