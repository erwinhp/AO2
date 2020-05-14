<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cdas extends Model
{
  protected $primaryKey = 'id_cda';
  protected $table = "cda";
  public $timestamps= false;
  protected $fillable = ['id_cda','cda','no_rab'];
}
