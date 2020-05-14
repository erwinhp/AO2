<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_rab extends Model
{
protected $table = "master_rab";
public $timestamps= false;
protected $primaryKey = 'id_master_rab';
protected $fillable = ['id_master_rab','no_rab','tgl_rab','no_prk','program','fungsi','judul','kode_lokasi','triwulan','surveyor_1','surveyor_2','rab_nama','flag_rab','khs','tanggal_verifikasi','wbs','glaccount','costcenter'];
}
