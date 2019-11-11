<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class spbj extends Model
{
  protected $table = "spbj";
  public $timestamps= false;
  protected $fillable = ['no_spbj','judul','nilai','vendor',];

}
