<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontrak extends Model
{
protected $table = "kontrak";
public $timestamps= false;
protected $fillable = ['no_kontrak','no_prk','no_skk','id_pekerjaan','pekerjaan','tanggal_spbj','tanggal_akhir','akhir_pemeliharaan','aktif_spbj','vendor','material_kontrak','jasa_kontrak','total_kontrak','material_bayar','jasa_bayar','total_bayar','aktif_bastp',
'aktif_byr','flag_kontrak','no_register_sipat','invoice_po','invoice_nonpo',
'no_denda','rpdenda_lainnya','dasar_pengenaan_pajak','ppn','pph22','pph23'];
}
