<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_lelangs extends Model
{
  protected $table = "jadwal_lelang";
  public $timestamps= false;
  protected $primaryKey = 'id_jadwal_lelang';
  protected $fillable = ['id_jadwal_lelang','no_rks','pengumuman_pelelangan','pengumumans_pelelangans','aanwijzing','	ba_aanwijzing','pemasukan_penawaran','pembukaan_penawaran','ba_pembukaan_penawaran','pengumuman_pemenang',
'pengumumans_pemenangs','penunjukan_pemenang','surat_penunjukan','cda','ba_cda','penerbitan_kontrak','no_kontrak'];
}
