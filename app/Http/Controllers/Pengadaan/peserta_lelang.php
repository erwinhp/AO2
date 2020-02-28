<?php

namespace App\Http\Controllers\Pengadaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\peserta_lelangs;


class peserta_lelang extends Controller
{
    //
    public function index()
    {
        return view('Pengadaan.indexpesertalelangs');
    }
    public function indexeditpesertalelangs()
    {
        return view('Pengadaan.editpesertalelangs');
    }


    public function getvendor(Request $request)
    {
      $counts=DB::select('select nama_perusahaan,id_vendor FROM Vendor',[]);
      return response()->json($counts);
    }


    public function getrabsmetode(Request $request)
    {
      $counts=DB::select('select no_rab FROM metode_lelang',[]);
      return response()->json($counts);
    }

    public function getmetodes(Request $request)
    {
      $counts=DB::select('select metode FROM metode_lelang where no_rab=:a',['a'=>$request->getrab]);
      return response()->json($counts);
    }


    public function getdatafulleditpesertalelang(Request $request)
    {
      $counts=DB::select('select * FROM peserta_lelang where no_rab=:a and nama_vendor=:b',['a'=>$request->getrab,'b'=>$request->getvendor]);
      return response()->json($counts);
    }


    public function getrabvendorsz(Request $request)
    {
      $counts=DB::select('select distinct no_rab FROM peserta_lelang where nama_vendor=:a',['a'=>$request->getvendor]);
      return response()->json($counts);
    }

    public function getrabedit(Request $request)
    {
      $counts=DB::select('select distinct no_rab FROM peserta_lelang where no_rab=:a',['a'=>$request->getrab]);
      return response()->json($counts);
    }

    public function storepesertalelang(Request $request)
    {
          $peserta = new peserta_lelangs();
          $peserta->nama_vendor = $request->nama_vendor;
          $peserta->no_rks = $request->no_rks;
          $peserta->no_rab = $request->no_rab;
          $peserta->tanggal_ambil_rks = $request->tanggal_ambil_rks;
          $peserta->ikut_aanwijzing = $request->ikut_aanwijzing;
          $peserta->masuk_penawaran = $request->masuk_penawaran;
          $peserta->harga_penawaran = $request->harga_penawaran;
          $peserta->flag_menang = $request->flag_menang;
          $peserta->jaminan_penawaran = $request->jaminan_penawaran;
          $peserta->penjamin = $request->penjamin;
          $peserta->tgl_akhir_jaminan = $request->tgl_akhir_jaminan;
          $peserta->save();
    }

    public function editpesertalelang(Request $request)
    {
          $peserta = peserta_lelangs::findOrFail($request->id_peserta_lelang);
          $peserta->nama_vendor = $request->nama_vendor;
          $peserta->no_rks = $request->no_rks;
          $peserta->no_rab = $request->no_rab;
          $peserta->tanggal_ambil_rks = $request->tanggal_ambil_rks;
          $peserta->ikut_aanwijzing = $request->ikut_aanwijzing;
          $peserta->masuk_penawaran = $request->masuk_penawaran;
          $peserta->harga_penawaran = $request->harga_penawaran;
          $peserta->flag_menang = $request->flag_menang;
          $peserta->jaminan_penawaran = $request->jaminan_penawaran;
          $peserta->penjamin = $request->penjamin;
          $peserta->tgl_akhir_jaminan = $request->tgl_akhir_jaminan;
          $peserta->save();
    }


}
