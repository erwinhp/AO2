<?php

namespace App\Http\Controllers\Pengadaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\rabpenawaran;
use DB;

class rab_penawaran extends Controller
{
  public function index()
  {
      return view('Pengadaan.rab_penawaranindex');
  }

  public function getmaxid(Request $request)
  {
    $ids=DB::select('select distinct max(id_detilrab) as id_detilrabs FROM rab_penawaran',[]);
    return response()->json($ids);
  }

  public function getvendor(Request $request)
{
       $data=DB::table('vendor')->where('nama_perusahaan','LIKE','%'.$request->term."%")->get();
   return response()->json($data);
}


public function getdatavendror(Request $request)
{
  $norab=DB::select('select * FROM rab_penawaran where no_rab=:a and id_vendor=:b',['a'=>$request->getrab,'b'=>$request->getvendorsz]);
  return response()->json($norab);
  }


public function edit_rabpenawaran()
{
    return view('Pengadaan.edit_rabpenawaran');
}


  // public function getvendor(Request $request)
  // {
  //   $ids=DB::select('select * FROM vendor',[]);
  //   return response()->json($ids);
  // }
  // public function addvendor(Request $request)
  // {
  //       $getsum=1;
  //       $rabpenawaran = new rab_penawaran();
  //       $rabpenawaran->no_rab = $request->no_rab;
  //       $rabpenawaran->uraian = $request->uraian;
  //       $rabpenawaran->nama_uraian = $request->nama_uraian;
  //       $rabpenawaran->jumlah = $request->jumlah;
  //       $rabpenawaran->satuan = $request->satuan;
  //       $rabpenawaran->harga_satuan = $request->harga_satuan;
  //       $rabpenawaran->material_PLN = $request->material_PLN;
  //       $rabpenawaran->total_mat = $request->urtotal_mataian;
  //       $rabpenawaran->total_jasa = $request->total_jasa;
  //       $rabpenawaran->total_biaya = $request->total_jasa;
  //       $rabpenawaran->kontrak = $request->kontrak;
  //       $rabpenawaran->harga_nego = $request->harga_nego;
  //       $rabpenawaran->total_harganego = $request->total_harganego;
  //       $rabpenawaran->save();
  // }
  public function update_rabpenawaran(Request $request)
  {
        $rabpenawaran = rabpenawaran::findOrFail($request->id_detilrab);
        $rabpenawaran->jumlah = $request->jumlah;
        $rabpenawaran->harga_nego = $request->harga_nego;
        $rabpenawaran->total_harganego = $request->total_harganego;
        $rabpenawaran->save();
  }


  public function storerab_penawaran(Request $request)
  {
        $rabpenawaran = new rabpenawaran();
        $rabpenawaran->no_rab = $request->no_rab;
        $rabpenawaran->uraian = $request->uraian;
        $rabpenawaran->nama_uraian = $request->nama_uraian;
        $rabpenawaran->jumlah = $request->jumlah;
        $rabpenawaran->satuan = $request->satuan;
        $rabpenawaran->harga_satuan = $request->harga_satuan;
        $rabpenawaran->material_PLN = $request->material_PLN;
        $rabpenawaran->total_biaya = $request->total_biaya;
        $rabpenawaran->kontrak = $request->kontrak;
        $rabpenawaran->harga_nego = $request->harga_nego;
        $rabpenawaran->spbj = $request->spbj;
        $rabpenawaran->total_harganego = $request->total_harganego;
        $rabpenawaran->id_vendor = $request->id_vendor;
        $rabpenawaran->save();
  }

}
