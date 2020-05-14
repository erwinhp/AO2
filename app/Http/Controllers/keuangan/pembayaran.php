<?php

namespace App\Http\Controllers\Keuangan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\kontrak;
use App\pembayarans;

class pembayaran extends Controller
{

  public function index()
  {
      return view('keuangan.pembayaran');
  }

  public function indexbuatpembayanrans()
  {
      return view('keuangan.buat_pembayaran');
  }

  public function getdatabayar(Request $request)
  {
    $counts=DB::select('select tanggal_bayar,jasa_bayar,material_bayar,total_bayar FROM pembayaran where no_rab=:a',['a'=>$request->getrab]);
    return response()->json($counts);
  }

  public function getsumsbyrs(Request $request)
  {
    $counts=DB::select('select sum(material_bayar) as material_bayarsz, sum(jasa_bayar) as jasa_bayarsz, sum(total_bayar) as total_bayarsz FROM pembayaran where no_rab=:a',['a'=>$request->getkontrak]);
    return response()->json($counts);
  }


  public function updatebyrkontrak(Request $request)
    {
      $kontrak = kontrak::findOrFail($request->id_kontrak);
      $kontrak->material_bayar = $request->material_bayar;
      $kontrak->jasa_bayar = $request->jasa_bayar;
      $kontrak->total_bayar = $request->total_bayar;
      $kontrak->no_register_sipat = $request->no_register_sipat;
      $kontrak->invoice_po = $request->invoice_po;
      $kontrak->invoice_nonpo = $request->invoice_nonpo;
      $kontrak->no_denda = $request->no_denda;
      $kontrak->rpdenda_lainnya = $request->rpdenda_lainnya;
      $kontrak->dasar_pengenaan_pajak	 = $request->dasar_pengenaan_pajak	;
      $kontrak->ppn = $request->ppn;
      $kontrak->pph22 = $request->pph22;
      $kontrak->pph23 = $request->pph23;
      $kontrak->save();
    }


    public function storebyr(Request $request)
    {
          $pembayaran = new pembayarans();
          $pembayaran->tanggal_bayar = $request->tanggal_bayar;
          $pembayaran->jasa_bayar = $request->jasa_bayar;
          $pembayaran->material_bayar = $request->material_bayar;
          $pembayaran->total_bayar = $request->total_bayar;
          $pembayaran->no_rab = $request->no_rab;
          $pembayaran->no_prk = $request->no_prk;
          $pembayaran->save();

  }




  public function updatebyr(Request $request)
  {
        $kontrak = pembayarans::findOrFail($request->id_bayar);
        $pembayaran->tanggal_bayar = $request->tanggal_bayar;
        $pembayaran->jasa_bayar = $request->jasa_bayar;
        $pembayaran->material_bayar = $request->material_bayar;
        $pembayaran->total_bayar = $request->total_bayar;
        $pembayaran->no_rab = $request->no_rab;
        $pembayaran->no_prk = $request->no_prk;
        $pembayaran->save();

}

}
