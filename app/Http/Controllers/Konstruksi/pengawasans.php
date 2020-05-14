<?php

namespace App\Http\Controllers\Konstruksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\pengawasan;
class pengawasans extends Controller
{
  public function index()
  {
      return view('Konstruksi.pengawasan');
  }

  public function storepengawasan(Request $request)
  {
        $pengawas = new adendum();
        $pengawas->no_kontrak = $request->no_kontrak;
        $pengawas->no_rab = $request->no_rab;
        $pengawas->id_lokasi = $request->id_lokasi;
        $pengawas->no_addendum = $request->no_addendum;
        $pengawas->periode_penilaian = $request->periode_penilaian;
        $pengawas->jumlah_tk = $request->jumlah_tk;
        $pengawas->sertifikasi_tk = $request->sertifikasi_tk;
        $pengawas->rencana_kerja1 = $request->rencana_kerja1;
        $pengawas->rencana_kerja2 = $request->rencana_kerja2;

        $pengawas->sarana_alat_k3_3 = $request->sarana_alat_k3_3;
        $pengawas->sarana_alat_k3_1 = $request->sarana_alat_k3_1;
        $pengawas->sarana_alat_k3_2 = $request->sarana_alat_k3_2;
        $pengawas->material_kerja1 = $request->material_kerja1;
        $pengawas->material_kerja2 = $request->material_kerja2;
        $pengawas->material_kerja3 = $request->material_kerja3;
        $pengawas->work_permit = $request->work_permit;
        $pengawas->bukti_work_permit = $request->bukti_work_permit;
        $pengawas->pelaksanaan_pekerjaan = $request->pelaksanaan_pekerjaan;
        $pengawas->komunikasi_koresponden_1 = $request->komunikasi_koresponden_1;
        $pengawas->komunikasi_koresponden_2 = $request->komunikasi_koresponden_2;
        $pengawas->kepatuhan_pelaporan_1 = $request->kepatuhan_pelaporan_1;
        $pengawas->kepatuhan_pelaporan_2 = $request->kepatuhan_pelaporan_2;

        $pengawas->jam_awal_padam = $request->jam_awal_padam;
        $pengawas->jam_akhir_padam = $request->jam_akhir_padam;
        $pengawas->k3_accident = $request->k3_accident;
        $pengawas->pelaksanaan_k3 = $request->pelaksanaan_k3;
        $pengawas->prosentase_laporan = $request->prosentase_laporan;
        $pengawas->prosentase_komulatif = $request->prosentase_komulatif;
        $pengawas->save();
  }

  public function getkontraksdata(Request $request)
  {
    $counts=DB::select('select no_kontrak,pekerjaan,total_kontrak,tanggal_akhir
    ,(select distinct adendum.no_adendum from adendum where adendum.no_rab=kontrak.no_rab and adendum.adendum_ke=(select max(adendum.adendum_ke) from adendum where adendum.no_rab=kontrak.no_rab)) as addendums
    FROM kontrak where no_rab=:a',['a'=>$request->getrab]);
    return response()->json($counts);
  }

  public function getlokasis(Request $request)
  {
    $counts=DB::select('select kode_lokasi,nama_lokasi FROM lokasi',[]);
    return response()->json($counts);
  }



}
