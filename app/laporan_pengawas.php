<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan_pengawas extends Model
{
  protected $table = "laporan_pengawas";
public $timestamps= false;
protected $primaryKey = 'id_laporan_kontrak';
protected $fillable = ['id_laporan_kontrak','no_rab','laporan'];
}
