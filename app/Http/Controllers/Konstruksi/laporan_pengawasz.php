<?php

namespace App\Http\Controllers\Konstruksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\laporan_pengawas;

class laporan_pengawasz extends Controller
{
  public function index()
  {
      return view('Konstruksi.laporan_pengawas');
    }

    public function storelaporankons(Request $request)
    {
          $ren = new laporan_pengawas();
          $ren->no_rab = $request->no_rab;
          $ren->laporan = $request->laporan;
          $ren->save();
    }

    public function getlaporandata(Request $request)
    {
      $norab=DB::select('select * FROM laporan_pengawas where no_rab=:a ',['a'=>$request->getrab]);
      return response()->json($norab);
      }


}
