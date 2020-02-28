<?php

namespace App\Http\Controllers\smentara;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\prk;
use App\kontrak;
use App\adendum;
class inputMA extends Controller
{
  public function index()
  {   $fungsi=DB::select('select id_fungsi, nama_fungsi from fungsi',[]);
      return view('pengadaan.buatkontrak')->with('fungsi',$fungsi);
  }

  public function indexprk()
  {   $fungsi=DB::select('select id_fungsi, nama_fungsi from fungsi',[]);
      return view('input.inputPRK')->with('fungsi',$fungsi);
  }


  public function getprksz(Request $request)
  {
    $data=DB::table('prk')->where('no_prk','LIKE','%'.$request->term."%")->get();
    return response()->json($data);
  }


  // public function getpekerjaans(Request $request)
  // {
  //   $data=DB::table('prk')->where('no_prk','LIKE','%'.$request->term."%")->get();
  //   return response()->json($data);
  // }



  public function getkontraks(Request $request)
  {
    $data=DB::table('kontrak')->where('no_kontrak','LIKE','%'.$request->term."%")->get();
    return response()->json($data);
  }

  public function storeadendum(Request $request)
  {
        $getsum=1;
        $adendum = new adendum();
        $adendum->no_kontrak = $request->no_kontrak;
        $adendum->adendum_tanggal = $request->adendum_tanggal;
        $adendum->adendum_harga = $request->adendum_harga;
        $adendum->tanggal_adendum = $request->tanggal_adendum;
        $adendum->save();
}


  public function storeprk(Request $request)
  {
        $getsum=1;
        $prk = new prk();
        $prk->no_prk = $request->no_prk;
        $prk->nama_prk = $request->nama_prk;
        $prk->pagu = $request->pagu;
        $prk->id_fungsi = $request->id_fungsi;
        $prk->nilai_investasi=$request->nilai_investasi;
        $prk->nilai_disbursement=$request->nilai_disbursement;
        $prk->save();
}

public function storekontrak(Request $request)
{
      $getsum=1;
      $kontrak = new kontrak();
      $kontrak->no_kontrak = $request->no_kontrak;
      $kontrak->no_prk = $request->no_prk;
      $kontrak->no_skk = $request->no_skk;
      $kontrak->pekerjaan = $request->pekerjaan;
      $kontrak->tanggal_spbj = $request->tanggal_spbj;
      $kontrak->tanggal_akhir = $request->tanggal_akhir;
      $kontrak->akhir_pemeliharaan = $request->akhir_pemeliharaan;
      $kontrak->aktif_spbj = $request->aktif_spbj;
      $kontrak->vendor = $request->vendor;
      $kontrak->material_kontrak = $request->material_kontrak;
      $kontrak->total_kontrak = $request->total_kontrak;
      $kontrak->material_bayar = $request->material_bayar;
      $kontrak->jasa_kontrak = $request->jasa_kontrak;
      $kontrak->jasa_bayar = $request->jasa_bayar;
      $kontrak->total_bayar = $request->total_bayar;
      $kontrak->aktif_bastp = $request->aktif_bastp;
      $kontrak->aktif_byr = $request->aktif_byr;
      $kontrak->no_rab = $request->no_rab;
      $kontrak->save();
}














//   public function index()
//   {   $fungsi=DB::select('select id_fungsi, nama_fungsi from fungsi',[]);
//       return view('pengadaan.buatkontrak')->with('fungsi',$fungsi);
//   }
//
//   public function indexprk()
//   {   $fungsi=DB::select('select id_fungsi, nama_fungsi from fungsi',[]);
//       return view('input.inputPRK')->with('fungsi',$fungsi);
//   }
//
//
//   public function getprksz(Request $request)
//   {
//     $data=DB::table('prk')->where('no_prk','LIKE','%'.$request->term."%")->get();
//     return response()->json($data);
//   }
//
//
//   public function getkontraks(Request $request)
//   {
//     $data=DB::table('kontrak')->where('no_kontrak','LIKE','%'.$request->term."%")->get();
//     return response()->json($data);
//   }
//
//   public function storeadendum(Request $request)
//   {
//         $getsum=1;
//         $adendum = new adendum();
//         $adendum->no_kontrak = $request->no_kontrak;
//         $adendum->adendum_tanggal = $request->adendum_tanggal;
//         $adendum->adendum_harga = $request->adendum_harga;
//         $adendum->tanggal_adendum = $request->tanggal_adendum;
//         $adendum->save();
// }
//
//
//   public function storeprk(Request $request)
//   {
//         $getsum=1;
//         $prk = new prk();
//         $prk->no_prk = $request->no_prk;
//         $prk->nama_prk = $request->nama_prk;
//         $prk->pagu = $request->pagu;
//         $prk->id_fungsi = $request->id_fungsi;
//         $prk->nilai_investasi=$request->nilai_investasi;
//         $prk->nilai_disbursement=$request->nilai_disbursement;
//         $prk->save();
// }
//
// public function storekontrak(Request $request)
// {
//       $getsum=1;
//       $kontrak = new kontrak();
//       $kontrak->no_kontrak = $request->no_kontrak;
//       $kontrak->no_prk = $request->no_prk;
//       $kontrak->no_skk = $request->no_skk;
//       $kontrak->pekerjaan = $request->pekerjaan;
//       $kontrak->tanggal_spbj = $request->tanggal_spbj;
//       $kontrak->tanggal_akhir = $request->tanggal_akhir;
//       $kontrak->akhir_pemeliharaan = $request->akhir_pemeliharaan;
//       $kontrak->aktif_spbj = $request->aktif_spbj;
//       $kontrak->vendor = $request->vendor;
//       $kontrak->material_kontrak = $request->material_kontrak;
//       $kontrak->total_kontrak = $request->total_kontrak;
//       $kontrak->material_bayar = $request->material_bayar;
//       $kontrak->jasa_kontrak = $request->jasa_kontrak;
//       $kontrak->jasa_bayar = $request->jasa_bayar;
//       $kontrak->total_bayar = $request->total_bayar;
//       $kontrak->aktif_bastp = $request->aktif_bastp;
//       $kontrak->aktif_byr = $request->aktif_byr;
//       $kontrak->save();
// }
}
