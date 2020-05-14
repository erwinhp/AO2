<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengawasan extends Model
{
  protected $table = "pengawasan";
  public $timestamps= false;
  protected $primaryKey = 'id_pengawasan';
  protected $fillable = ['no_kontrak','no_rab','id_lokasi','no_addendum',
  'periode_penilaian','jumlah_tk','sertifikasi_tk','rencana_kerja1','rencana_kerja2','sarana_alat_k3_1','sarana_alat_k3_2','sarana_alat_k3_3','material_kerja1'
,'material_kerja2','material_kerja3','work_permit','bukti_work_permit','pelaksanaan_pekerjaan','komunikasi_koresponden_1','komunikasi_koresponden_2','kepatuhan_pelaporan_1'
,'kepatuhan_pelaporan_2','jam_awal_padam','jam_akhir_padam','k3_accident','pelaksanaan_k3','prosentase_laporan','prosentase_komulatif'];
}
