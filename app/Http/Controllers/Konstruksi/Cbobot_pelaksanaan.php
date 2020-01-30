<?php

namespace App\Http\Controllers\Konstruksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\bobot_pelaksanaan;
use DB;
class Cbobot_pelaksanaan extends Controller
{

  public function fetch_dataedit(Request $request)
  {

    if($request->ajax())
    {
      $counts=DB::select('select o.id_bobot, o.no_rab, o.uraian, o.volume_spbj, o.volume_cek, o.tanggal_cek, o.kodebanyak, (select uraian_matkhs from mat_khs i where i.kode_matkhs=o.uraian)
     as uraians FROM bobot_pelaksanaan o where o.no_rab=:a and o.tanggal_cek=:b',['a'=>$request->getrab,'b'=>$request->gettgl]);
      return response()->json($counts);
    }
 }


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



public function getcount(Request $request)
{
    $count=0;
    $counts=DB::select('select distinct max(kodebanyak) as kodebanyak FROM bobot_pelaksanaan where no_rab=:a',['a'=>$request->getrab]);
    foreach ($counts as $key => $value) {
      foreach ($value as $key => $value2) {
            $count=$value2;
      }
  }
  if($count==null)
  {
    $count=1;
  }
  else {
    $count=$count+1;
  }
  return response()->json($count);
}


public function storebobot(Request $request)
{
      $getsum=1;
      $adendum = new bobot_pelaksanaan();
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
(select (i.total_biaya/(sum(j.total_biaya)))*100 from rab_khs_detil j WHERE j.no_rab=i.no_rab) as prosentase
FROM rab_khs_detil i where i.no_rab=:a and i.total_biaya != 0',['a'=>$request->getrab]);
  return response()->json($norab);
}
}


public function getdate(Request $request)
{
  $counts=DB::select('select distinct tanggal_cek FROM bobot_pelaksanaan where no_rab=:a',['a'=>$request->getrab]);
  return response()->json($counts);
}

public function getdataedit(Request $request)
{
  $counts=DB::select('select o.id_bobot, o.no_rab, o.uraian, o.volume_spbj, o.volume_cek, o.tanggal_cek, o.kodebanyak, (select uraian_matkhs from mat_khs i where i.kode_matkhs=o.uraian)
 as uraians FROM bobot_pelaksanaan o where o.no_rab=:a and o.tanggal_cek=:b',['a'=>$request->getrab,'b'=>$request->gettgl]);
  return response()->json($counts);
}

public function update(Request $request)
  {
    $bobot = bobot_pelaksanaan::findOrFail($request->id_bobot);
    $bobot->volume_cek = $request->volume_cek;
    $bobot->save();
  }


public function editbobotindex()
{
    return view('Konstruksi.editbobot_pelaksanaan');
}


}
