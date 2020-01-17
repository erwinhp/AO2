<?php

namespace App\Http\Controllers\Konstruksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class Cbobot_pelaksanaan extends Controller
{
  public function index()
  {
    $norab=DB::select('select distinct no_rab FROM rab_khs_detil',[]);
      return view('Konstruksi.bobot_pelaksanaan')->with('norab',$norab);
    }


    public function getrab(Request $request)
 {
         $data=DB::table('master_rab')->where('no_rab','LIKE','%'.$request->term."%")->get();
     return response()->json($data);
 }

public function getcount()
{
    $count=1;
    $counts=DB::select('select distinct kodebanyak FROM bobot_pelaksanaan',[]);
    foreach ($counts as $key => $value) {
    $count=$value;
  }
  return response()->json($count);
}


public function storebobot(Request $request)
{
      $getsum=1;
      $adendum = new adendum();
      $adendum->no_rab = $request->no_rab;
      $adendum->uraian = $request->uraian;
      $adendum->volume_spbj = $request->volume_spbj;
      $adendum->volume_cek = $request->volume_cek;
      $adendum->tanggal_cek = $request->tanggal_cek;
      $adendum->kodebanyak = $request->kodebanyak;
      $adendum->save();
}

 public function getmaterial(Request $request)
{

  if($request->ajax())
     {
  $norab=DB::select('
select i.no_rab,i.id_detilrab,(SELECT o.uraian_matkhs FROM mat_khs o WHERE o.kode_matkhs=i.uraian) as uraians,i.uraian,i.jumlah, i.total_biaya,
(select i.total_biaya/sum(j.total_biaya)*100 from rab_khs_detil j group by i.total_biaya)
as prosentase FROM rab_khs_detil i where i.no_rab=:a and i.total_biaya != 0',['a'=>$request->getrab]);
  return response()->json($norab);
}
}

}
