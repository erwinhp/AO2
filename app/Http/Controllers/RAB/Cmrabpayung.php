<?php
namespace App\Http\Controllers\RAB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\master_rab;
use DB;
use Illuminate\Support\Facades\Redirect;

class Cmrabpayung extends Controller
{
  public function index()
{
return view('indexMasterabpayungs');
}

public function getspbj(Request $request)
{
     $data=DB::table('spbj')->where('no_spbj','LIKE','%'.$request->term."%")->get();
 return response()->json($data);
}

public function getprksz(Request $request)
{
  $counts=DB::select('select no_prk FROM prk',[]);
  return response()->json($counts);
}

public function getprkspbj(Request $request)
{
  $counts=DB::select('select no_prk FROM spbj where no_spbj=:a',['a'=>$request->getspbjs]);
  return response()->json($counts);
}


public function search(Request $request)
{
if($request->ajax())
{
$output="";
$no_kontrak="";
$no_kontrak=$request->no_kontrak;
$numb=0;
$products=DB::table('master_rab')->where('no_rab','LIKE','%'.$request->search."%")->where('khs',1)->where('flag_rab','pk')->where('no_spbj','!=',NULL)->get();
if($products)
{
foreach ($products as $key => $product) {
$output.='<tr>'.
'<td>'.++$numb.'</td>'.
'<td>'.$product->no_rab.'</td>'.
'<td>'.$product->judul.'</td>'.
'<td>'.$product->program.'</td>'.
'<td>'.$product->nilai_rab.'</td>'.
'<td><a class="btn btn-primary" href="/Rdetil?no_rab='.$product->no_rab.'&no_spbj='.$product->no_spbj.'" role="button">Detil</a></td>'.
'</tr>';
}
return Response($output);
   }
   }
}


public function create()
{
  $user = Auth::user()->name;
  $prk=DB::select('select no_prk from prk',[]);
  $fungsi=DB::select('select id_fungsi, nama_fungsi from fungsi',[]);
  $surveyor=DB::select('select kode_surveyor, nama_surveyor from surveyor',[]);
  $lokasi=DB::select('select kode_lokasi, nama_lokasi from lokasi',[]);
  $norab=DB::select('select no_rab from master_rab where tgl_rab IN (SELECT max(tgl_rab) FROM master_rab) ',[]);
return view('input.inputMasterRABpayungs')
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
  $master_rab -> no_prk = $request->no_prkabc;
  $master_rab -> program = $request->program;
  $master_rab -> fungsi = $request->fungsi;
  $master_rab -> judul = $request->judul;
  $master_rab -> kode_lokasi = $request->kode_lokasi;
  $master_rab -> triwulan = $request->triwulan;
  $master_rab -> rab_nama = $request->rab_nama;
  $master_rab -> flag_rab = $request->flag_rab;
  $master_rab -> khs = $request->khs;
  $master_rab -> no_spbj = $request->no_spbj;
  $master_rab->save();
  // return redirect()->action('Cmrab@index');
   return Redirect::to('idmrab'.'?no_rab='.$request->no_rab."&no_spbj=".$request->no_spbj);
//
}


}
