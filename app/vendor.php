<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
  protected $table = "vendor";
  public $timestamps= false;
  protected $primaryKey = 'id_vendor';
  protected $fillable = ['id_vendor','nama_perusahaan','alamat','nomor_kontak','npwp',];

}
