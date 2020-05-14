<?php

namespace App\Http\Controllers\Konstruksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\chart_perencanaan;

class Ccharts_perencanaan extends Controller
{
  public function index()
  {
    $norab=DB::select('select distinct no_rab FROM rab_khs_detil',[]);
      return view('Konstruksi.chartrenindex')->with('norab',$norab);
    }

    public function storepoint(Request $request)
    {
          $ren = new chart_perencanaan();
          $ren->no_rab = $request->no_rab;
          $ren->tgl_progress = $request->tgl_progress;
          $ren->jumlah_progress = $request->jumlah_progress;
          $ren->jenis_chart = $request->jenis_chart;
          $ren->adendum_ke = $request->adendum_ke;
          $ren->save();
    }


    // public function getdatarennewprosentase(Request $request)
    // {
    //   $norab=DB::select('select o.tanggal_cek,
    //   (select sum(total_harganego) from bobot_pelaksanaan i where o.tanggal_cek=i.tanggal_cek and o.no_rab=i.no_rab) as sumtotal
    //   from bobot_pelaksanaan o where o.no_rab=:a group by tanggal_cek',['a'=>$request->getrab]);
    //   return response()->json($norab);
    //   }


      public function getdatarennewprosentase(Request $request)
      {
        $norab=DB::select('select distinct(tanggal_cek) from bobot_pelaksanaan where no_rab=:a',['a'=>$request->getrab]);
        return response()->json($norab);
        }


      public function gettgldatacek(Request $request)
      {
        $norab=DB::select('select volume_cek,uraian from bobot_pelaksanaan where no_rab=:a and tanggal_cek=:b',['a'=>$request->getrab,'b'=>$request->gettglcek]);
        return response()->json($norab);
        }


    public function getcurves(Request $request)
    {
      $norab=DB::select('select tgl_progress, jumlah_progress FROM chart_perencanaan where no_rab=:a and jenis_chart="ren"',['a'=>$request->getrab]);
      $sums=[];
      $sum=0;
      foreach ($norab as $key => $value) {
        array_push($sums, $value->jumlah_progress);
        // if($sum==0)
        // {
        //
        // $sum=$sum+$value->jumlah_progress;
        // array_push($sums, $sum);
        // }
        // else {
        //   $sum=$sum+$value->jumlah_progress;
        //   array_push($sums, $sum);
        // }
      }
      // dd($sums);
      return response()->json($sums);
      }

      public function gettglsperencanaans(Request $request)
      {
        $norab=DB::select('select tgl_progress FROM chart_perencanaan where no_rab=:a and jenis_chart="ren"',['a'=>$request->getrab]);
        $tglperencanaanschart=[];
        foreach ($norab as $key => $value) {
          array_push($tglperencanaanschart, $value->tgl_progress);
        }
        // dd($sums);
        return response()->json($tglperencanaanschart);
        }


      public function getsum(Request $request)
      {
        $norab=DB::select('select sum(jumlah_progress)as getsum FROM chart_perencanaan where no_rab=:a and jenis_chart="ren"',['a'=>$request->getrab]);
        return response()->json($norab);
        }




        public function indexedits()
        {
            return view('Konstruksi.edit_chartren');
          }



        public function updatechart(Request $request)
          {
            $bobot = chart_perencanaan::findOrFail($request->id_chartren);
            $bobot->tgl_progress = $request->tgl_progress;
            $bobot->jumlah_progress = $request->jumlah_progress;
            $bobot->save();
          }


          public function getdatachart(Request $request)
          {
            $norab=DB::select('select id_chartren, no_rab, tgl_progress, jumlah_progress FROM chart_perencanaan where no_rab=:a and jenis_chart="ren"',['a'=>$request->getrab]);
            return response()->json($norab);
            }


}
