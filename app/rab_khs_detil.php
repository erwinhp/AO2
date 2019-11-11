<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rab_khs_detil extends Model
{
protected $table = "rab_khs_detil";
public $timestamps= false;
protected $primaryKey = 'id_detilrab';
protected $fillable = ['id_detilrab','no_rab','uraian','nama_uraian','jumlah','satuan','harga_satuan','material_PLN','material_PFK','total_mat','total_jasa','total_biaya','kontrak'];

}
