<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adendum extends Model
{
    protected $table = "adendum";
  public $timestamps= false;
  protected $fillable = ['id_adendum','no_kontrak','adendum_tanggal','adendum_harga','tanggal_adendum'];
}
