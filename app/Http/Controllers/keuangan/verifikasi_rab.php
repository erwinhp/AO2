<?php

namespace App\Http\Controllers\keuangan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\master_rab;



class verifikasi_rab extends Controller
{
  public function index()
  {
      return view('keuangan.verifikasirab');
  }

  // public function getmasterrabid(Request $request)
  // {
  //   $pagu=DB::select('select id_master_rab, no_rab from master_rab',[]);
  // }


  public function getdataverifikasi(Request $request)
  {
    $no_prks='';
    $counts=DB::select('select id_master_rab,no_prk, judul, tgl_rab, tanggal_verifikasi, sum(nilai_rab)as total_rab from master_rab where no_rab=:a',['a'=>$request->getrab]);
    if($counts)
    {
      $no_prks=$counts[0]->no_prk;
    }
    $pagu=DB::select('select pagu from prk where no_prk=:a',['a'=>$no_prks]);


    $totalsz=DB::select('select sum(total_kontrak)as totals from kontrak where no_prk=:a',['a'=>$no_prks]);

    return response()->json([$counts,$pagu,$totalsz]);
  }


  public function updateverifikasirab(Request $request)
    {
      $updatesrabverifikasi = master_rab::findOrFail($request->id_master_rab);
      $updatesrabverifikasi->tanggal_verifikasi = $request->tanggal_verifikasi;
      $updatesrabverifikasi->wbs = $request->wbs;
      $updatesrabverifikasi->glaccount = $request->glaccount;
      $updatesrabverifikasi->costcenter = $request->costcenter;
      $updatesrabverifikasi->save();
    }

}
