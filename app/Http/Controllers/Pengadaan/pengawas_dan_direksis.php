<?php

namespace App\Http\Controllers\Pengadaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\pengawas_dan_direksi;
use DB;
class pengawas_dan_direksis extends Controller
{

  public function index()
  {
      return view('Pengadaan.pengawas_dan_direksi');
    }



  public function storepdd(Request $request)
  {
        $getsum=1;
        $pdd = new pengawas_dan_direksi();
        $pdd->id_pdd = $request->id_pdd;
        $pdd->no_rab = $request->no_rab;
        $pdd->nama = $request->nama;
        $pdd->jabatan = $request->jabatan;
        $pdd->save();
  }
}
