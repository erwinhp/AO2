<?php

namespace App\Http\Controllers\RAB;
use App\Http\Controllers\Controller;
use App\master_rab;
use DB;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class Cmrab extends Controller
{
  public function index()
{
return view('indexMasterab');
}

public function search(Request $request)
{
if($request->ajax())
{
$output="";
$numb=0;
$products=DB::table('master_rab')->where('no_rab','LIKE','%'.$request->search."%")->where('khs',1)->get();
if($products)
{
foreach ($products as $key => $product) {
$output.='<tr>'.
'<td>'.++$numb.'</td>'.
'<td><a href="/Rdetil?no_rab='.$product->no_rab.'">'.$product->no_rab.'</a></td>'.
'<td>'.$product->judul.'</td>'.
'<td>'.$product->program.'</td>'.
'<td>'.$product->nilai_rab.'</td>'.


'</tr>';
}
// '<td><a class="btn btn-primary" href="/Rdetil?no_rab='.$product->no_rab.'" role="button">Detil</a></td>'.
return Response($output);
   }
   }
}


public function getprkszzz(Request $request)
{
  $norab=DB::select('select i.id_fungsi, (select o.nama_fungsi from fungsi o where i.id_fungsi=o.id_fungsi)as nama_fungsi FROM prk i where i.no_prk=:a',['a'=>$request->getprk]);
  return response()->json($norab);
  }



public function create()
{
  $user = Auth::user()->name;
  $prk=DB::select('select no_prk from prk',[]);
  $fungsi=DB::select('select id_fungsi, nama_fungsi from fungsi',[]);
  $surveyor=DB::select('select kode_surveyor, nama_surveyor from surveyor',[]);
  $lokasi=DB::select('select kode_lokasi, nama_lokasi from lokasi',[]);
  $norab=DB::select('select no_rab from master_rab where tgl_rab IN (SELECT max(tgl_rab) FROM master_rab) ',[]);
return view('input.inputMasterRAB')
->with('prk',$prk)
->with('fungsi',$fungsi)
->with('lokasi',$lokasi)
->with('user',$user)
->with('no_rab',$norab)
->with('surveyor',$surveyor);
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
  // return redirect()->action('Cmrab@index');
   return Redirect::to('idmrab'.'?no_rab='.$request->no_rab);
//
// $master = new master_rab;
// $kab -> kabupaten = $request->kabupaten;
// $kab->save();
// return redirect()->action('inKab@index');
//return redirect()->action('tugasC@index');
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
// $master=master_rab::find($id);
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$master=master_rab::find($id);

return View('edit.eKab')
->with('Kab',$kab);

}


public function update(Request $request, $id)
{
$master=master_rab::find($id);
$master -> kabupaten = $request->kabupaten;
$master->save();


$master=master_rab::all();
return redirect()->action('inKab@index');

}


public function destroy($id)
{
$master=master_rab::find($id)
->delete();
$kab=master_rab::find($id);
$Kab=master_rab::all();
//redirect lagi
return redirect()->action('inKab@index');

}
}
