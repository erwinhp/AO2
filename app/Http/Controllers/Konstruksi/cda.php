<?php

namespace App\Http\Controllers\Konstruksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\cdas;

class cda extends Controller
{
  public function index()
  {
      return view('Konstruksi.cda');
    }

    public function storecda(Request $request)
    {
          $ren = new cdas();
          $ren->no_rab = $request->no_rab;
          $ren->cda = $request->cda;
          $ren->save();
    }


    public function getcdadata(Request $request)
    {
      $norab=DB::select('select * FROM cda where no_rab=:a ',['a'=>$request->getrab]);
      return response()->json($norab);
      }


}
