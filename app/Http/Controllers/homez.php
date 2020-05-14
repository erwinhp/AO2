<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use DB;
use Spatie\Browsershot\Browsershot;

class homez extends Controller
{
public function index()
{
  return view('home');
}

public function getprksbayarandkontrak(Request $request)
{
  $counts=DB::select('select pagu FROM prk where no_prk=:a',['a'=>$request->getprk]);
  $counts1=DB::select('select sum(total_kontrak) as tk, sum(total_bayar)as tb FROM kontrak where no_prk=:a',['a'=>$request->getprk]);
  return response()->json([$counts,$counts1]);
}

}
