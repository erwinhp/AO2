<?php

namespace App\Http\Controllers\Konstruksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\adendum;
use App\rab_penawarans;
use DB;
class addendum extends Controller
{
  public function index()
  {
      return view('Konstruksi.addendum');
  }

  public function getdataaddendumsz(Request $request)
  {
    $counts=DB::select('select o.id_detilrab, o.uraian, o.nama_uraian, o.jumlah,
    o.satuan, (select max(j.id_detilrab) FROM rab_penawaran j WHERE j.no_rab=o.no_rab) as idmax, o.id_vendor, o.harga_nego, o.material_PLN,
    o.total_harganego, o.no_rab, o.spbj, (select uraian_matkhs from mat_khs i where i.kode_matkhs=o.uraian)
    as uraians, (select max(k.adendum_ke) from adendum k where k.no_rab=o.no_rab)as adendum_ke
    FROM rab_penawaran o where o.no_rab=:a',['a'=>$request->getrab]);
    return response()->json($counts);
  }



  public function gettotalbayarszsz(Request $request)
  {
    $counts=DB::select('select total_bayar FROM kontrak where no_rab=:a',['a'=>$request->getrab]);
    return response()->json($counts);
  }

  public function storeaddendums(Request $request)
  {
        $adendum = new adendum();
        $adendum->uraian = $request->uraian;
        $adendum->jumlah = $request->jumlah;
        $adendum->no_rab = $request->no_rab;
        $adendum->no_prk = $request->no_prk;
        $adendum->nama_uraian = $request->nama_uraian;
        $adendum->satuan = $request->satuan;
        $adendum->material_PLN = $request->material_PLN;
        $adendum->spbj = $request->spbj;
        $adendum->harga_nego = $request->harga_nego;
        $adendum->total_harganego = $request->total_harganego;
        $adendum->id_vendor = $request->id_vendor;
        $adendum->tanggal_adendum = $request->tanggal_adendum;
        $adendum->adendum_tanggal = $request->adendum_tanggal;
        $adendum->no_kontrak = $request->no_kontrak;
        $adendum->no_adendum = $request->no_adendum;
        $adendum->adendum_ke = $request->adendum_ke;
        $adendum->total_bayar = $request->total_bayar;
        $adendum->save();
  }


}
