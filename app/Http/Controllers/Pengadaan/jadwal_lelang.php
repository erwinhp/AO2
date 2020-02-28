<?php

namespace App\Http\Controllers\pengadaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\jadwal_lelangs;
use DB;
class jadwal_lelang extends Controller
{
  public function index()
  {
      return view('Pengadaan.jadwallelangs');
  }

  public function indexeditjadwal()
  {
      return view('Pengadaan.editjadwallelangs');
  }

  public function indexviewjadwal()
  {
      return view('Pengadaan.indexviewjadwal');
  }


  public function getdatajadwal(Request $request)
  {
    $counts=DB::select('select * FROM jadwal_lelang where no_rks=:a',['a'=>$request->getrks]);
    return response()->json($counts);
  }




  public function getrks(Request $request)
  {
    $counts=DB::select('select no_rks FROM metode_lelang where no_rks not in (select no_rks from jadwal_lelang)',[]);
    return response()->json($counts);
  }


  public function getrksjadwal(Request $request)
  {
    $counts=DB::select('select no_rks FROM jadwal_lelang',[]);
    return response()->json($counts);
  }


  public function storejadwallelangs(Request $request)
  {
        $jadwals = new jadwal_lelangs();
        $jadwals->no_rks = $request->no_rks;
        $jadwals->pengumuman_pelelangan = $request->pengumuman_pelelangan;
        $jadwals->pengumumans_pelelangans = $request->pengumumans_pelelangans;
        $jadwals->aanwijzing = $request->aanwijzing;
        $jadwals->ba_aanwijzing = $request->ba_aanwijzing;
        $jadwals->pemasukan_penawaran = $request->pemasukan_penawaran;
        $jadwals->pembukaan_penawaran = $request->pembukaan_penawaran;
        $jadwals->ba_pembukaan_penawaran = $request->ba_pembukaan_penawaran;
        $jadwals->pengumuman_pemenang = $request->pengumuman_pemenang;
        $jadwals->pengumumans_pemenangs = $request->pengumumans_pemenangs;
        $jadwals->pengumumans_pelelangans = $request->pengumumans_pelelangans;
        $jadwals->penunjukan_pemenang = $request->penunjukan_pemenang;
        $jadwals->surat_penunjukan = $request->surat_penunjukan;
        $jadwals->cda = $request->cda;
        $jadwals->ba_cda = $request->ba_cda;
        $jadwals->penerbitan_kontrak = $request->penerbitan_kontrak;
        $jadwals->no_kontrak = $request->no_kontrak;
        $jadwals->save();
  }


  public function updatejadwallelang(Request $request)
    {
      $jadwals = jadwal_lelangs::findOrFail($request->id_jadwal_lelang);
      $jadwals->no_rks = $request->no_rks;
      $jadwals->pengumuman_pelelangan = $request->pengumuman_pelelangan;
      $jadwals->pengumumans_pelelangans = $request->pengumumans_pelelangans;
      $jadwals->aanwijzing = $request->aanwijzing;
      $jadwals->ba_aanwijzing = $request->ba_aanwijzing;
      $jadwals->pemasukan_penawaran = $request->pemasukan_penawaran;
      $jadwals->pembukaan_penawaran = $request->pembukaan_penawaran;
      $jadwals->ba_pembukaan_penawaran = $request->ba_pembukaan_penawaran;
      $jadwals->pengumuman_pemenang = $request->pengumuman_pemenang;
      $jadwals->pengumumans_pemenangs = $request->pengumumans_pemenangs;
      $jadwals->pengumumans_pelelangans = $request->pengumumans_pelelangans;
      $jadwals->penunjukan_pemenang = $request->penunjukan_pemenang;
      $jadwals->surat_penunjukan = $request->surat_penunjukan;
      $jadwals->cda = $request->cda;
      $jadwals->ba_cda = $request->ba_cda;
      $jadwals->penerbitan_kontrak = $request->penerbitan_kontrak;
      $jadwals->no_kontrak = $request->no_kontrak;
      $jadwals->save();
    }



}
