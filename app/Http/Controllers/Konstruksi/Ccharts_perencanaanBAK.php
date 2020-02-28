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
          $ren->save();
    }




    public function getcurves(Request $request)
    {
      $norab=DB::select('select tgl_progress, jumlah_progress FROM chart_perencanaan where no_rab=:a and jenis_chart="ren"',['a'=>$request->getrab]);
      $sums=[];
      $sum=0;
      foreach ($norab as $key => $value) {
        if($sum==0)
        {
        array_push($sums, ['label' => $value->tgl_progress, 'y' => $value->jumlah_progress]);
        $sum=$sum+$value->jumlah_progress;
        }
        else {
          $sum=$sum+$value->jumlah_progress;
          array_push($sums, ['label' => $value->tgl_progress, 'y' =>$sum]);
        }
      }
      // dd($sums);
      return response()->json($sums);
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
            $norab=DB::select('select id_chartren, no_rab, tgl_progress, jumlah_progress FROM chart_perencanaan where no_rab=:a',['a'=>$request->getrab]);
            return response()->json($norab);
            }

            // public function getkontraks rab_kon(Request $request)
            // {
            //   $norab=DB::select('select id_chartren, no_rab, tgl_progress, jumlah_progress FROM chart_perencanaan where no_rab=:a',['a'=>$request->getrab]);
            //   return response()->json($norab);
            //   }

}
