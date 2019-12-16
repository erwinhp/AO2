<?php

namespace App\Http\Controllers;
use App\master_rab;
use DB;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Crabnonkhsmaster extends Controller
{

  public function index()
{
return view('indexMasterabnonkhs');
}

public function create()
{
  $user = Auth::user()->name;
  $prk=DB::select('select no_prk from prk',[]);
  $fungsi=DB::select('select id_fungsi, nama_fungsi from fungsi',[]);
  $surveyor=DB::select('select kode_surveyor, nama_surveyor from surveyor',[]);
  $lokasi=DB::select('select kode_lokasi, nama_lokasi from lokasi',[]);
  $norab=DB::select('select no_rab from master_rab where tgl_rab IN (SELECT max(tgl_rab) FROM master_rab) ',[]);
return view('input.inputMasterRABnonkhs')
->with('prk',$prk)
->with('fungsi',$fungsi)
->with('lokasi',$lokasi)
->with('user',$user)
->with('no_rab',$norab)
->with('surveyor',$surveyor);
}


public function search(Request $request)
{
if($request->ajax())
{
$output="";
$numb=0;
$products=DB::table('master_rab')->where('no_rab','LIKE','%'.$request->search."%")->where('khs',0)->get();
if($products)
{
foreach ($products as $key => $product) {
$output.='<tr>'.
'<td>'.++$numb.'</td>'.
'<td>'.$product->no_rab.'</td>'.
'<td>'.$product->judul.'</td>'.
'<td>'.$product->program.'</td>'.
'<td>'.$product->nilai_rab.'</td>'.
'<td><a class="btn btn-primary" href="/Rdetilnon?no_rab='.$product->no_rab.'" role="button">Detil</a></td>'.
'</tr>';
}
return Response($output);
   }
   }
}


public function store(Request $request)
{
  // dd($request->all());
  $master_rab = new master_rab;
  $master_rab -> no_rab = $request->no_rab;
  $master_rab -> tgl_rab = $request->tgl_rab;
  $master_rab -> no_prk = $request->no_prk;
  $master_rab -> program = $request->program;
  $master_rab -> fungsi = $request->fungsi;
  $master_rab -> judul = $request->judul;
  $master_rab -> kode_lokasi = $request->kode_lokasi;
  $master_rab -> triwulan = $request->triwulan;
  $master_rab -> surveyor_1 = $request->surveyor_1;
  $master_rab -> surveyor_2 = $request->surveyor_2;
  $master_rab -> rab_nama = $request->rab_nama;
  $master_rab -> flag_rab = $request->flag_rab;
  $master_rab -> khs = $request->khs;
  $master_rab->save();
   return Redirect::to('idmrabnon'.'?no_rab='.$request->no_rab);
}

}
