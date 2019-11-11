<?php

namespace App\Http\Controllers;
//ini yang kontrak
use Illuminate\Http\Request;
use App\kontrak;
use DB;
use Illuminate\Support\Facades\Redirect;
class Crabpayung extends Controller
{

public function index()
{
return view('indexMasterabpayung');
}



public function search(Request $request)
{
if($request->ajax())
{
$output="";
$numb=0;
$products=DB::table('kontrak')->where('no_kontrak','LIKE','%'.$request->search."%")->where('flag_kontrak',"PK")->get();
if($products)
{
foreach ($products as $key => $product) {
$output.='<tr>'.
'<td>'.++$numb.'</td>'.
'<td>'.$product->no_kontrak.'</td>'.
'<td>'.$product->pekerjaan.'</td>'.
'<td><a class="btn btn-primary" href="/cmasterabpayung?no_kontrak='.$product->no_kontrak.'" role="button">Detil</a></td>'.
'</tr>';
}
return Response($output);
   }
   }
 }



   public function create()
   {
     // $user = Auth::user()->name;
   return view('input.inputMasterRABpayung');
   }


public function store(Request $request)
{
  // dd($request->all());
  $master_rab = new kontrak;
  $master_rab -> no_kontrak = $request->no_kontrak;
  $master_rab -> no_prk = $request->no_prk;
  $master_rab -> no_skk = $request->no_skk;
  $master_rab -> id_pekerjaan = $request->id_pekerjaan;
  $master_rab -> pekerjaan = $request->pekerjaan;
  $master_rab -> tanggal_spbj = $request->tanggal_spbj;
  $master_rab -> tanggal_akhir = $request->tanggal_akhir;
  $master_rab -> akhir_pemeliharaan = $request->akhir_pemeliharaan;
  $master_rab -> aktif_spbj = $request->aktif_spbj;
  $master_rab -> vendor = $request->vendor;
  $master_rab -> material_kontrak = $request->material_kontrak;
  $master_rab -> jasa_kontrak = $request->jasa_kontrak;
  $master_rab -> total_kontrak = $request->total_kontrak;
  $master_rab -> material_bayar = $request->material_bayar;
  $master_rab -> jasa_bayar = $request->jasa_bayar;
  $master_rab -> total_bayar = $request->total_bayar;
  $master_rab -> aktif_bastp = $request->aktif_bastp;
  $master_rab -> total_bayar = $request->total_bayar;
  $master_rab -> aktif_byr = $request->aktif_byr;
  $master_rab -> flag_kontrak = $request->flag_kontrak;
  $master_rab->save();
  // return redirect()->action('Cmrab@index');
   return Redirect::to('cmasterabpayung'.'?no_kontrak='.$request->no_kontrak);
}

}
