<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rab_khs_detil;
use DB;
class cdetilrabnonkhs extends Controller
{
  public function index()
  {
        $rab='';
        if (isset($_GET['no_rab']))
        {
          $rab=$_GET['no_rab'];
        }

        return view('indexdetilRABnonkhs')->with('rab',$rab);
  }

  public function fetch_data(Request $request)
  {

    if($request->ajax())
    {
        // $data=DB::select('select i.id_detilrab, (SELECT j.uraian_matkhs from mat_khs j WHERE j.kode_matkhs=i.uraian) as uraian, i.jumlah, i.satuan, i.harga_satuan,
        // i.material_PLN, i.total_biaya, i.no_rab from rab_khs_detil i where i.no_rab=:a',['a'=>$request->rab]);
        $data = rab_khs_detil::where('no_rab', $request->rab)->get();
        echo json_encode($data);
    }
  }

  public function store(Request $request)
  {

        $getsum=1;
        $rabs = new rab_khs_detil();
        $rabs->no_rab = $request->no_rab;
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
     return response()->json($rabs);
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
    return response()->json($data);
  }


}
