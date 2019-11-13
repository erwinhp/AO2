<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class detilindex extends Controller
{
  function index(Request $request)
  {
    $no_prk="";
  if(isset($_GET['no_prk'])) {
    $no_prk=$_GET['no_prk'];
  }
return view('MAdetil')->with('prk',$no_prk);
}


public function fetch_datagen(Request $request)
{
        if($request->ajax())
        {
        $no_prk="";
        if(isset($_GET['prk'])) {
        $no_prk=$_GET['prk'];
        }
        $data =DB::select('select no_kontrak,no_skk,tanggal_spbj,tanggal_akhir
          FROM kontrak WHERE (no_prk)=:j', ['j' => $no_prk]);
      // $data = rab_khs_detil::where('no_rab', $request->rab)->get();
      echo json_encode($data);
  }
}

public function fetch_datapek(Request $request)
{
  if($request->ajax())
  {
      $no_prk="";
      if(isset($_GET['prk'])) {
      $no_prk=$_GET['prk'];
      }
      $data = DB::select('select pekerjaan,material_kontrak,jasa_kontrak,
      total_kontrak,material_bayar,jasa_bayar,total_bayar FROM kontrak WHERE
      (no_prk)=:j', ['j' => $no_prk]);
      echo json_encode($data);
  }
}

}
