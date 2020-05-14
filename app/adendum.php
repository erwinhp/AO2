<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adendum extends Model
{
    protected $table = "adendum";
  public $timestamps= false;
  protected $fillable = ['id_adendum','no_adendum','no_kontrak','no_prk','adendum_tanggal','tanggal_adendum','uraian','nama_uraian','jumlah','satuan','material_pln','no_rab','spbj','harga_nego',
  'total_harganego','adendum_ke','id_vendor','total_bayar'];
}
