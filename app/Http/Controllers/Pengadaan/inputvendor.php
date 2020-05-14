<?php

namespace App\Http\Controllers\Pengadaan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\vendor;
use DB;
class inputvendor extends Controller
{


  public function index()
  {
      return view('Pengadaan.inputvendor');
  }

  public function storevendor(Request $request)
  {
        $addvendor = new vendor();
        $addvendor->nama_perusahaan = $request->nama_perusahaan;
        $addvendor->alamat = $request->alamat;
        $addvendor->nomor_kontak = $request->nomor_kontak;
        $addvendor->npwp = $request->npwp;
        $addvendor->direktur = $request->direktur;
        $addvendor->save();
  }

}
