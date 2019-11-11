<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mat_khs extends Model
{
  protected $table = "master_rab";
public $timestamps= false;
protected $fillable = ['kode_matkhs','uraian_matkhs','satuan_matkhs','harga_matkhs','PLN','PFK','keterangan_matkhs'];
}
