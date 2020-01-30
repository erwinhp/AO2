<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\kontrak;
class CMApembayaran extends Controller
{
  public function index()
  {
        $pekerjaans=DB::select('select no_prk , pekerjaan, vendor, no_skk, invoice_po, invoice_nonpo, no_denda,
        dasar_pengenaan_pajak, total_kontrak, ppn, pph22, pph23, rpdenda_lainnya, total_bayar,no_register_sipat, no_kontrak
        FROM kontrak',[]);

      return view('Pembayaran')->with('pekerjaan',$pekerjaans);
  }


  public function indexdetilpembayaran()
  {
    $no_kontrak="";
  if(isset($_GET['no_kontrak'])) {
    $no_kontrak=$_GET['no_kontrak'];
  }
    return view('Pembayarandetil')->with('no_kontrak',$no_kontrak);
  }

  public function getdetilpembayaran(Request $request)
  {

            if($request->ajax())
            {
            $no_kontrak="";
            if(isset($_GET['no_kontrak'])) {
            $no_kontrak=$_GET['no_kontrak'];
            }

    $pekerjaans=DB::select('select no_prk , pekerjaan, vendor, no_skk, invoice_po, invoice_nonpo, no_denda,
    dasar_pengenaan_pajak, total_kontrak, ppn, pph22, pph23, rpdenda_lainnya, total_bayar,no_register_sipat, no_kontrak
    FROM kontrak where no_kontrak=:a',['a'=> $no_kontrak]);
    echo json_encode($pekerjaans);
  }
}


  public function gettermyn(Request $request)
  {
    $count=0;
    $termin1=0;
    $termin2=0;
    $termin3=0;
    if($request->ajax())
    {
    $no_kontrak="";
    if(isset($_GET['no_kontrak'])) {
    $no_kontrak=$_GET['no_kontrak'];
    $terminsu=DB::select('select (termin1+termin2+termin3) as terminsum from kontrak where no_kontrak=:a',['a'=>$no_kontrak]);
    echo json_encode($terminsu);
    }
  }
}

}
