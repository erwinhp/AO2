<?php

namespace App\Http\Controllers;
use Auth;
use App\spbj;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class Cspbjpk extends Controller
{
  public function index()
{
return view('indexMasterabspbj');
}

public function search(Request $request)
{
if($request->ajax())
{
$output="";
$no_kontrak="";
$no_kontrak=$request->no_kontrak;
$numb=0;
$products=DB::table('spbj')->where('no_spbj','LIKE','%'.$request->search."%")->get();
if($products)
{
foreach ($products as $key => $product) {
$output.='<tr>'.
'<td>'.++$numb.'</td>'.
'<td>'.$product->no_spbj.'</td>'.
'<td>'.$product->judul.'</td>'.
'<td>'.$product->nilai.'</td>'.
'<td>'.$product->vendor.'</td>'.
'<td><a class="btn btn-primary" href="#" role="button">Detil</a></td>'.
'</tr>';
}
//&no_kontrak='.$no_kontrak.
return Response($output);
   }
   }
}


public function create()
{
return view('input.inputMasterspbj');
}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
  // dd($request->all());
  $master_rab = new spbj;
  $master_rab -> no_spbj = $request->no_spbj;
  $master_rab -> judul = $request->judul;
  $master_rab -> nilai = $request->nilai;
  $master_rab -> vendor = $request->vendor;
  $master_rab -> save();
  return Redirect::to('mspbjpk');

}

}
