<?php

namespace App\Http\Controllers\keuangan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\rencana_pembayarans;

class rencana_pembayaran extends Controller
{
  public function index()
  {
      return view('keuangan.buat_rencana_pembayaran');
  }


  public function getdatarencanabayar(Request $request)
  {
    $counts=DB::select('select id_kontrak,no_prk, no_skk, tanggal_akhir, no_rab,(select nama_perusahaan from vendor where vendor.id_vendor=kontrak.vendor) as vendors,vendor,
    pekerjaan, total_kontrak from kontrak where no_kontrak=:a',['a'=>$request->getkontrak]);
    return response()->json($counts);
  }

  public function storerpbyr(Request $request)
  {
        $rabs = new rencana_pembayaran();
        $rabs->id_rencana_pembayaran = $request->id_rencana_pembayaran;
        $rabs->no_skk = $request->no_skk;
        $rabs->no_kontrak = $request->no_kontrak;
        $rabs->no_rab = $request->no_rab;
        $rabs->no_prk = $request->no_prk;
        $rabs->vendor = $request->vendor;
        $rabs->uraian_pekerjaan = $request->uraian_pekerjaan;
        $rabs->tgl_selesai_kontrak = $request->tgl_selesai_kontrak;
        $rabs ->nilai_kontrak = $request->nilai_kontrak;
        $rabs->nilai_pembayaran = $request->nilai_pembayaran;
        $rabs->bulan = $request->bulan;
        $rabs ->minggu = $request->minggu;
        $rabs->no_bastp = $request->no_bastp;
        $rabs->save();
      }

}
