<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rencana_pembayarans extends Model
{
  protected $table = "rencana_pembayaran";
  public $timestamps= false;
  protected $primaryKey = 'id_rencana_pembayaran';
  protected $fillable = ['id_rencana_pembayaran','no_skk','no_prk','no_kontrak','no_rab','vendor','uraian_pekerjaan','tgl_selesai_kontrak','nilai_kontrak','nilai_pembayaran','bulan','minggu','no_bastp'];

}
