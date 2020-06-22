<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pks extends Model
{
  protected $table = "pk";
  public $timestamps= false;
  protected $primaryKey = 'id_pk';
  protected $fillable = ['id_pk','no_pk','tgl_awal','tgl_akhir','no_rab','vendor'];

}
