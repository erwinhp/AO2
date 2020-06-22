<?php

namespace App\Http\Controllers;
use Auth;
use App\spbj;
use App\pks;
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

public function getspbjdata(Request $request)
{
  $counts=DB::select('select no_spbj,
   (select judul from spbj where master_rab.no_spbj=spbj.no_spbj) as judul,
   (select nilai from spbj where master_rab.no_spbj=spbj.no_spbj) as nilai,
   (select (select nama_perusahaan from vendor where vendor.id_vendor=spbj.vendor) from spbj where spbj.no_spbj=master_rab.no_spbj)as vendor,
   (select vendor from spbj where spbj.no_spbj=master_rab.no_spbj)as id_vendor
   from master_rab where no_rab=:a',
  ['a'=>$request->getrab]);
  return response()->json($counts);
}




public function create()
{
return view('input.inputMasterspbj');
}


public function storepks(Request $request)
{
  // dd($request->all());
  $pks = new pks;
  $pks -> no_pk = $request->no_pk;
  $pks -> tgl_awal = $request->tgl_awal;
  $pks -> tgl_akhir = $request->tgl_akhir;
  $pks -> no_rab = $request->no_rab;
  $pks -> vendor = $request->vendor;
  $pks -> save();

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
  $master_rab -> no_prk = $request->no_prk;

  $master_rab -> save();
  return Redirect::to('mspbjpk');

}

}
