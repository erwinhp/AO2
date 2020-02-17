<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rabpenawaran extends Model
{
  protected $table = "rab_penawaran";
  public $timestamps= false;
  protected $primaryKey = 'id_detilrab';
  protected $fillable = ['id_detilrab','no_rab','uraian','nama_uraian','jumlah','satuan','harga_satuan','material_PLN','total_biaya','kontrak','harga_nego','total_harganego','id_vendor'];

}
