<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transport extends Model
{
  protected $table = "transport";
  public $timestamps= false;
  protected $fillable = ['id','uraian','harga'];

}
