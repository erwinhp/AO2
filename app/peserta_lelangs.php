<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peserta_lelangs extends Model
{
  protected $table = "peserta_lelang";
  public $timestamps= false;
  protected $primaryKey = 'id_peserta_lelang';
  protected $fillable = ['id_peserta_lelang','nama_vendor','no_rab','no_rks','ambil_rks','tanggal_ambil_rks','ikut_aanwijzing','masuk_penawaran','harga_penawaran','flag_menang','jaminan_penawaran','penjamin','tgl_akhir_jaminan'];


}
