<?php

namespace App\Http\Controllers\RAB;
use App\Http\Controllers\Controller;
use App\rab_khs_detil;
use App\mat_khs;
use DB;
use Illuminate\Http\Request;

class Cdetilrab extends Controller
{

public function index()
{
      $rab='';
      $material_utama='';
      if (isset($_GET['no_rab']))
      {
        $rab=$_GET['no_rab'];
         $atribut=DB::select('select i.program, i.fungsi, i.judul, i.rab_nama,
          (SELECT j.nama_lokasi from lokasi j WHERE j.kode_lokasi=i.kode_lokasi)as lokasi
           from master_rab i WHERE i.no_rab=:a',['a'=>$rab]);

          $material_utama=DB::select('select i.satuan, i.jumlah, i.material_PLN, i.total_biaya,(SELECT(LEFT(i.uraian,1)))as hvuraian,
          (SELECT j.mat_utama from mat_khs j WHERE j.kode_matkhs=i.uraian)as mat_utama,
          (SELECT j.uraian_matkhs from mat_khs j WHERE j.kode_matkhs=i.uraian)as uraian_nama,
          (SELECT j.harga_matkhs from mat_khs j WHERE j.kode_matkhs=i.uraian)as matkhs_harga
          from rab_khs_detil i where i.no_rab=:a HAVING hvuraian="M" AND mat_utama=1',['a'=>$rab]);

          $material_nonutama=DB::select('select i.satuan, i.jumlah, i.material_PLN, i.total_biaya,(SELECT(LEFT(i.uraian,1)))as hvuraian,
          (SELECT j.mat_utama from mat_khs j WHERE j.kode_matkhs=i.uraian)as mat_utama,
          (SELECT j.uraian_matkhs from mat_khs j WHERE j.kode_matkhs=i.uraian)as uraian_nama,
          (SELECT j.harga_matkhs from mat_khs j WHERE j.kode_matkhs=i.uraian)as matkhs_harga
          from rab_khs_detil i where i.no_rab=:a HAVING hvuraian="M" AND mat_utama=0',['a'=>$rab]);

          $jasa=DB::select('select i.satuan, i.jumlah, i.material_PLN, i.total_biaya,(SELECT(LEFT(i.uraian,1)))as hvuraian,
          (SELECT j.uraian_matkhs from mat_khs j WHERE j.kode_matkhs=i.uraian)as uraian_nama,
          (SELECT j.harga_matkhs from mat_khs j WHERE j.kode_matkhs=i.uraian)as matkhs_harga
          from rab_khs_detil i where i.no_rab=:a HAVING hvuraian="J"',['a'=>$rab]);

          $transport=DB::select('select i.satuan,i.uraian,i.nama_uraian, i.total_biaya,
          (SELECT j.harga_matkhs from mat_khs j WHERE j.kode_matkhs=i.uraian)as matkhs_harga
          from rab_khs_detil i where i.no_rab=:a AND i.uraian="Transport" ',['a'=>$rab]);
          // dd($transport);
          if($transport != [])
          {
            $idtr="";
            foreach ($transport as $key => $value) {
              $idtr=$value->nama_uraian;

              $berats=DB::select('
              select
                   (SELECT if(j.tonase > j.metrix,j.tonase,j.metrix)
                   from mat_khs j WHERE j.kode_matkhs=i.uraian AND COALESCE(j.satuan_matkhs, "") <> "jasa")*i.jumlah as berat
                   from rab_khs_detil i
                   where COALESCE(i.no_rab, "")=:a
                   AND COALESCE(i.material_PLN, "") = "PLN"
                   AND COALESCE(i.uraian, "") <> "Transport" ',['a'=>$rab]);

                   $berat=0;
                   foreach ($berats as $key => $value) {
                     $berat=$berat+$value->berat;
                   }
                   array_push($transport,$berat);


                   $hargas=DB::table('transport')->where('id',$idtr)->get();
                   $harga=0;
                   foreach ($hargas as $key => $value) {
                      $harga=($value->harga);
                    }

                    array_push($transport,$harga);
                    $transport['berat']=$transport[1];
                    unset($transport[1]);
                    $transport['harga']=$transport[2];
                    unset($transport[2]);
                    // dd($transport[0]);

            }
          }







          // dd($jasa);
      }

      $spbj='';
      if (isset($_GET['no_spbj']))
      {
        $spbj=$_GET['no_spbj'];
      }
      return view('indexdetilRAB')->with('no_spbj',$spbj)->with('rab',$rab)->with('atribut',$atribut)
      ->with('material_utama',$material_utama)
      ->with('jasa',$jasa)
      ->with('transport',$transport)
      ->with('material_nonutama',$material_nonutama);
}
/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */

 public function fetch_data(Request $request)
 {

   if($request->ajax())
   {
       $data=DB::select('select i.id_detilrab, (SELECT j.uraian_matkhs from mat_khs j WHERE j.kode_matkhs=i.uraian) as uraian, i.jumlah, i.satuan, i.harga_satuan,
       i.material_PLN, i.total_biaya, i.no_rab from rab_khs_detil i where COALESCE(i.no_rab, "")=:a AND COALESCE(i.uraian, "") <> "Transport"',['a'=>$request->rab]);
       // $data = rab_khs_detil::where('no_rab', $request->rab)->get();
       echo json_encode($data);
   }
}




public function gettotalcurrentrab(Request $request)
{

  if($request->ajax())
  {
      $data=DB::select('select sum(total_biaya)as totalcurrentrab from rab_khs_detil where no_rab=:a',['a'=>$request->rab]);
      return response()->json($data);
  }
}


public function gethargarabpenawaranspbj(Request $request)
{

  if($request->ajax())
  {
      $data=DB::select('select sum(total_harganego)as totalpenawaran from rab_penawaran where spbj=:a',['a'=>$request->madude]);
      return response()->json($data);
  }
}


public function gethargaadendumspbj(Request $request)
{

  if($request->ajax())
  {
      $data=DB::select('select sum(total_harganego)as totaladendum from adendum where spbj=:a',['a'=>$request->madude]);
      return response()->json($data);
  }
}


public function gettotalhargaspbj(Request $request)
{

  if($request->ajax())
  {
      $data=DB::select('select nilai from spbj where no_spbj=:a',['a'=>$request->madude]);
      return response()->json($data);
  }
}

public function fetch_datatransport(Request $request)
{

  if($request->ajax())
  {
      $data=DB::select('select i.id_detilrab,i.nama_uraian,
      (SELECT j.uraian from transport j WHERE j.id=i.nama_uraian) as uraians,
      i.total_biaya from rab_khs_detil i WHERE
      i.no_rab=:a and i.uraian="Transport"',['a'=>$request->rab]);
      // $data = rab_khs_detil::where('no_rab', $request->rab)->get();
      echo json_encode($data);
  }
}


 public function store(Request $request)
 {

       $getsum=1;
       $rabs = new rab_khs_detil();
       $rabs->no_rab = $request->no_rab;
       $rabs->uraian = $request->uraian;
       $rabs->nama_uraian = $request->nama_uraian;
       $rabs->jumlah = $request->jumlah;
       $rabs->satuan = $request->satuan;
       $rabs->harga_satuan = $request->harga_satuan;
       $rabs->material_PLN = $request->material_PLN;
       $rabs->total_biaya = $request->total_biaya;
       $rabs ->kontrak = $request->kontrak;
       $rabs->spbj = $request->no_spbj;
       $rabs->save();
       $nilai=DB::select('select sum(total_biaya)as tot from rab_khs_detil WHERE no_rab=:a',['a'=>$request->no_rab]);
       foreach ($nilai as $key => $value) {
         $getsum=$value;
      }
      // dd($getsum->tot);
       DB::table('master_rab')
        ->where('no_rab', $request->no_rab)
        ->update(['nilai_rab' => $getsum->tot]);

        $norab=$request->no_rab;
        $gettrs=DB::select('select uraian,nama_uraian,total_biaya from rab_khs_detil WHERE uraian="Transport" AND no_rab=:a',['a'=>$norab]);
        // dd itu check di network
        // dd($gettrs[0]->nama_uraian);

        if ($gettrs != []) {
          // foreach($gettrs as $gg){
          //   $gettr=$gg;
          $dataz=DB::select('select i.id_detilrab,
          (SELECT if(j.tonase > j.metrix,j.tonase,j.metrix)
          from mat_khs j WHERE j.kode_matkhs=i.uraian)*i.jumlah as berat,
          i.material_PLN, i.no_rab from rab_khs_detil i
          where COALESCE(i.no_rab, "")=:a
          AND COALESCE(i.material_PLN, "") = "PLN"
          AND COALESCE(i.uraian, "") <> "Transport"',['a'=>$norab]);

          $dataa=DB::table('transport')->where('id',($gettrs[0]->nama_uraian))->get();
          $getprice=0;
          foreach ($dataa as $key => $value) {
             $getprice=($value->harga);
           }
           $gettotalberat=0;
           foreach ($dataz as $key => $value) {
             $gettotalberat=$gettotalberat+$value->berat;
           }
           $totalprice=$gettotalberat*$getprice;
           // dd($totalprice);
           DB::table('rab_khs_detil')
            ->where([['no_rab', $norab],['uraian',"Transport"]])
            ->update(['total_biaya' => $totalprice]);
          }

       return response()->json($rabs);
}



 /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Product  $product
  * @return \Illuminate\Http\Response
  */
 public function edit($id)
 {
   if(request()->ajax())
   {
       $data = rab_khs_detil::findOrFail($id);
       return response()->json(['data' => $data]);
   }
 }


 public function show($id)
 {
     $rabs = rab_khs_detil::findOrFail($id);

     return view('rabs.show', ['rabs' => $rabs]);
 }



 public function update(Request $request)
   {
     $getsum=1;
     $rabs = rab_khs_detil::findOrFail($request->id_detilrab);
     $rabs->no_rab = $request->no_rab;
     $rabs->uraian = $request->uraian;
     $rabs->nama_uraian = $request->nama_uraian;
     $rabs->jumlah = $request->jumlah;
     $rabs->satuan = $request->satuan;
     $rabs->harga_satuan = $request->harga_satuan;
     $rabs->material_PLN = $request->material_PLN;
     $rabs->total_biaya = $request->total_biaya;
     $rabs->save();
     $nilai=DB::select('select sum(total_biaya)as tot from rab_khs_detil WHERE no_rab=:a',['a'=>$request->no_rab]);
     foreach ($nilai as $key => $value) {
       $getsum=$value;
    }
    // dd($getsum->tot);
     DB::table('master_rab')
      ->where('no_rab', $request->no_rab)
      ->update(['nilai_rab' => $getsum->tot]);
      $norab=$request->no_rab;
      $gettrs=DB::select('select uraian,nama_uraian,total_biaya from rab_khs_detil WHERE uraian="Transport" AND no_rab=:a',['a'=>$norab]);
      // dd itu check di network
      // dd($gettrs[0]->nama_uraian);

      if ($gettrs != []) {
        // foreach($gettrs as $gg){
        //   $gettr=$gg;
        $dataz=DB::select('select i.id_detilrab,
        (SELECT if(j.tonase > j.metrix,j.tonase,j.metrix)
        from mat_khs j WHERE j.kode_matkhs=i.uraian)*i.jumlah as berat,
        i.material_PLN, i.no_rab from rab_khs_detil i
        where COALESCE(i.no_rab, "")=:a
        AND COALESCE(i.material_PLN, "") = "PLN"
        AND COALESCE(i.uraian, "") <> "Transport"',['a'=>$norab]);

        $dataa=DB::table('transport')->where('id',($gettrs[0]->nama_uraian))->get();
        $getprice=0;
        foreach ($dataa as $key => $value) {
           $getprice=($value->harga);
         }
         $gettotalberat=0;
         foreach ($dataz as $key => $value) {
           $gettotalberat=$gettotalberat+$value->berat;
         }
         $totalprice=$gettotalberat*$getprice;
         // dd($totalprice);
         DB::table('rab_khs_detil')
          ->where([['no_rab', $norab],['uraian',"Transport"]])
          ->update(['total_biaya' => $totalprice]);
        }

    return response()->json($rabs);
   }



   public function dataAjaxtr(Request $request)
{
        $data=DB::table('transport')->where('uraian','LIKE','%'.$request->term."%")->get();
    return response()->json($data);
}


public function datamatgettr(Request $request)
{   if($request->ajax())
   {
     $dataz=DB::select('select i.id_detilrab,
     (SELECT if(j.tonase > j.metrix,j.tonase,j.metrix)
     from mat_khs j WHERE j.kode_matkhs=i.uraian AND COALESCE(j.satuan_matkhs, "") <> "jasa")*i.jumlah as berat,
     i.material_PLN, i.no_rab from rab_khs_detil i
     where COALESCE(i.no_rab, "")=:a
     AND COALESCE(i.material_PLN, "") = "PLN"
     AND COALESCE(i.uraian, "") <> "Transport"',['a'=>$request->no_rab]);

     $data=DB::table('transport')->where('id',$request->id)->get();
     $getprice=0;
     foreach ($data as $key => $value) {
        $getprice=($value->harga);
      }
      $gettotalberat=0;
      foreach ($dataz as $key => $value) {
        $gettotalberat=$gettotalberat+$value->berat;
      }
      $totalprice=$gettotalberat*$getprice;
      //untuk pass 2 variable
     // return response()->json([$data,$dataz]);
        // return response()->json($totalprice);
     //thanks madude
     // dd($getprice);
     return response()->json([$totalprice,$getprice,$gettotalberat]);

   }
}


   public function dataAjax(Request $request)
{
        $data=DB::table('mat_khs')->where('uraian_matkhs','LIKE','%'.$request->term."%")->where('uraian_matkhs','<>','Transport')->get();
    return response()->json($data);
}

public function datamatget(Request $request)
{   if($request->ajax())
   {
     $data=DB::table('mat_khs')->where('kode_matkhs',$request->idmat)->get();
     return response()->json($data);
   }
}

 /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Product  $product
  * @return \Illuminate\Http\Response
  */




 public function destroy($id)
 {
  $norab="";
  $getsum=1;
  $gettr=[];
  $data = rab_khs_detil::findOrFail($id);


   $no_rab=DB::select('select no_rab from rab_khs_detil WHERE id_detilrab=:a',['a'=>$id]);
   foreach ($no_rab as $key => $rabrab) {
     $norab=$rabrab->no_rab;
   }
   $data->delete();
   $nilai=DB::select('select sum(total_biaya)as tot from rab_khs_detil WHERE no_rab=:a',['a'=>$norab]);
   foreach ($nilai as $key => $value) {
   $getsum=$value;
  }
  // dd($getsum->tot);
   DB::table('master_rab')
    ->where('no_rab', $norab)
    ->update(['nilai_rab' => $getsum->tot]);

     $gettrs=DB::select('select uraian,nama_uraian,total_biaya from rab_khs_detil WHERE uraian="Transport" AND no_rab=:a',['a'=>$norab]);
     // dd itu check di network
     // dd($gettrs[0]->nama_uraian);
     if ($gettrs != []) {
       // foreach($gettrs as $gg){
       //   $gettr=$gg;
       $dataz=DB::select('select i.id_detilrab,
       (SELECT if(j.tonase > j.metrix,j.tonase,j.metrix)
       from mat_khs j WHERE j.kode_matkhs=i.uraian)*i.jumlah as berat,
       i.material_PLN, i.no_rab from rab_khs_detil i
       where COALESCE(i.no_rab, "")=:a
       AND COALESCE(i.material_PLN, "") = "PLN"
       AND COALESCE(i.uraian, "") <> "Transport"',['a'=>$norab]);

       $dataa=DB::table('transport')->where('id',($gettrs[0]->nama_uraian))->get();
       $getprice=0;
       foreach ($dataa as $key => $value) {
          $getprice=($value->harga);
        }
        $gettotalberat=0;
        foreach ($dataz as $key => $value) {
          $gettotalberat=$gettotalberat+$value->berat;
        }
        $totalprice=$gettotalberat*$getprice;
        // dd($totalprice);
        DB::table('rab_khs_detil')
         ->where([['no_rab', $norab],['uraian',"Transport"]])
         ->update(['total_biaya' => $totalprice]);
       }
          return response()->json($data);
     }




 }
