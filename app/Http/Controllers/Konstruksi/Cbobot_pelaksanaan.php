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

 public function getmaterial(Request $request)
{
  if($request->ajax())
     {
  $norab=DB::select('select i.no_rab,i.id_detilrab,(SELECT o.uraian_matkhs FROM mat_khs o WHERE o.kode_matkhs=i.uraian) as uraian,i.jumlah
  FROM rab_khs_detil i where no_rab=:a AND LEFT(i.uraian,1)="M"',['a'=>$request->getrab]);
  return response()->json($norab);
}
}

}
