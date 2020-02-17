<?php

namespace App\Http\Controllers\Pengadaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\metode_lelangs;
use DB;
class metode_lelang extends Controller
{
  public function index()
  {
      return view('Pengadaan.metode_lelangs');
  }


  public function getnamapekerjaan(Request $request)
  {
    $counts=DB::select('select judul FROM master_rab where no_rab=:a',['a'=>$request->getrab]);
    return response()->json($counts);
  }


  public function storemetodelelang(Request $request)
  {
        $methods = new metode_lelangs();
        $methods->no_rks = $request->no_rks;
        $methods->no_rab = $request->no_rab;
        $methods->nama_pekerjaan = $request->nama_pekerjaan;
        $methods->metode = $request->metode;
        $methods->vendor = $request->vendor;
        $methods->save();
  }

}
