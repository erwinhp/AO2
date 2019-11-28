<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;

class Cindex extends Controller
{

  function index(Request $request)
  {
    // $prk='';
    // $prkq="";
    // if(isset($_GET["noprk"]))
    // {
    //   $prk=$_GET["noprk"];
    // }
    // if ($prk!=="")
    //   {
          // }
      // $prkq=DB::select('select * from prk where no_prk=:prk',['prk' => $prk]);
//$dude= (Auth::user()->name);
$show=[];
$lihats=[];
  $prkq=DB::select('select * from prk');
  foreach ($prkq as $key => $prks) {
    foreach ($prks as $key => $value) {
      $pekerjaans=DB::select('select o.no_prk ,
      sum(o.total_kontrak) as totalkontrak,
      (SELECT i.pagu from prk i WHERE i.no_prk=o.no_prk) as pagu,
      (SELECT i.nama_prk from prk i WHERE i.no_prk=o.no_prk) as namaprk,
      (sum(o.total_kontrak)/(SELECT i.pagu from prk i WHERE i.no_prk=o.no_prk))*100 as persenkontrak,
      sum(o.total_bayar) as totalbayar,
      (sum(o.total_bayar))/(sum(o.total_kontrak))*100 as persenbayar
      FROM kontrak o WHERE no_prk=:prk GROUP BY no_prk',['prk' => $prks->no_prk]);
    }
    // array_push($lihats,$pekerjaans);
    foreach ($pekerjaans as $key => $krj) {
      $krj->pagu=number_format($krj->pagu);
      $krj->totalbayar=number_format($krj->totalbayar);
      $krj->totalkontrak=number_format($krj->totalkontrak);
      if($krj->persenkontrak==NULL)
      {
        $krj->persenkontrak=0;
      }

      if($krj->persenbayar==NULL)
      {
        $krj->persenbayar=0;
      }
      array_push($show, $krj);
    }
  }
// DD($show);
// $count=count($show);
// for ($i=1; $i < $count ; $i++) {
//   for ($j=$count-1; $j >=$i ; $j--) {
//     if($show[$j-1]->persenkontrak > $show[$j]->persenkontrak) {
//         $tmp = $show[$j-1]->persenkontrak;
//         $show[$j-1]->persenkontrak = $show[$j]->persenkontrak;
//         $show[$j]->persenkontrak = $tmp;
//   }
// }
// }
// dd($show);
$persenkontraks = array_column($show, 'persenkontrak');
array_multisort($persenkontraks, SORT_ASC, $show);

return view('MA')->with('prk',$show);
}

}
