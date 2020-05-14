<?php

namespace App\Http\Controllers\Konstruksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\chart_perencanaan;

class charts extends Controller
{
  public function index()
  {      return view('Konstruksi.chart');
  }
//this is sementara
  // public function getdatren(Request $request)
  // {
  //   $ren=DB::select('select jumlah_progress,tgl_progress  FROM chart_perencanaan where no_rab=:a and jenis_chart="ren"',['a'=>$request->getrab]);
  //   $count=count($ren);
  //   $rens=[];
  //   $sum=0;
  //   for ($x = 0; $x < $count; $x++) {
  //     if($x==0)
  //     {
  //       $sum=$ren[$x]->jumlah_progress;
  //       array_push($rens, ['label' => $ren[$x]->tgl_progress, 'y' => $sum]);
  //     }
  //     else
  //     {
  //       $sum=$sum+$ren[$x]->jumlah_progress;
  //       array_push($rens, ['label' => $ren[$x]->tgl_progress, 'y' => $sum]);
  //     }
  //   }
  //   return response()->json($rens);
  // }

  public function getnokontrakrab(Request $request)
  {
    $nokonrab=DB::select('select no_kontrak, no_rab FROM kontrak',[]);
    return response()->json($nokonrab);
    }



  public function getdatlak(Request $request)
  {
    $lak=DB::select('select jumlah_progress FROM chart_perencanaan where no_rab=:a and jenis_chart="lak"',['a'=>$request->getrab]);
    $lak1=DB::select('select i.jumlah_progress FROM chart_perencanaan i where i.no_rab=:a and i.jenis_chart="add" and i.adendum_ke=(select max(o.adendum_ke) FROM chart_perencanaan o where i.no_rab=o.no_rab and o.jenis_chart="add")',['a'=>$request->getrab]);
    $laks=[];
    if ($lak1===null)
    {
      foreach ($lak1 as $key => $value) {
        array_push($laks, $value->jumlah_progress);
      }
      return response()->json($laks);
    }
    else {
      foreach ($lak as $key => $value) {
        array_push($laks, $value->jumlah_progress);
      }
      return response()->json($laks);
    }

    }



  public function date_sort($a, $b) {
      return strtotime($a->tgl_progress) - strtotime($b->tgl_progress);
    }

    public function gettanggalbbt(Request $request)
    {
      $tgl=DB::select('select tgl_progress FROM chart_perencanaan where no_rab=:a',['a'=>$request->getrab]);
      $tgls=[];
      usort($tgl, array('self','date_sort'));
      $array = array_unique($tgl, SORT_REGULAR);
      foreach ($array as $key => $value) {
        array_push($tgls, $value->tgl_progress);
      }
      return response()->json($tgls);
      }


  public function getdatren(Request $request)
  {
    $ren=DB::select('select jumlah_progress FROM chart_perencanaan where no_rab=:a and jenis_chart="ren"',['a'=>$request->getrab]);
    $count=count($ren);
    $sum=0;
    $rens=[];
    for ($x = 0; $x < $count; $x++) {
      array_push($rens, $ren[$x]->jumlah_progress);
        // if($x==0)
        // {
        //   $sum=$ren[$x]->jumlah_progress;
        //   array_push($rens, $sum);
        // }
        // else
        // {
        //   $sum=$sum+$ren[$x]->jumlah_progress;
        //   $ren[$x]->jumlah_progress=$sum;
        //   array_push($rens, $sum);
        // }
      }
    return response()->json($rens);
    }

}
