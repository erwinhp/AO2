<?php

namespace App\Http\Controllers;
use DB;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Http\Request;

class Cexcel extends Controller
{
  function index()
   {
    return view('import_excelrabkhs');
   }


   function store(Request $request)
       {
        $start = microtime(true);
        // set request to 10000 second max
        ini_set('max_execution_time', 10000);
        ini_set('memory_limit','1024M');
        DB::disableQueryLog();
        $this->validate($request, [
        'select_file'  => 'required|mimes:xls,xlsx,csv'
        ]);
        // get path of file and get filename
        $path = $request->file('select_file')->getRealPath();
        $file=$request->file('select_file')->getClientOriginalName();
        $filename = pathinfo($file, PATHINFO_FILENAME);
        //set file name

        //count time start
        $collection = (new FastExcel)->import($path);
        $arrayexcel=$collection->toArray();
        $getnorab="";
        // dd($arrayexcel);
        foreach (array_chunk($arrayexcel,1000) as $key => $value)
        {
          DB::table("rab_khs_detil")->insert($value);
          $getnorab=($value[0]["no_rab"]);
        }


        $time = microtime(true) - $start;
        $nilai=DB::select('select sum(total_biaya)as tot from rab_khs_detil WHERE no_rab=:a',['a'=>$getnorab]);
        foreach ($nilai as $key => $value) {
          $getsum=$value;
       }
       // dd($getsum->tot);
        DB::table('master_rab')
         ->where('no_rab', $getnorab)
         ->update(['nilai_rab' => $getsum->tot]);
        return back()->with('success', "Insert data sukses");
      }


  function indexnonkhs()
   {
    return view('import_excelrabnonkhs');
   }


   function storenonkhs(Request $request)
       {
        $start = microtime(true);
        // set request to 10000 second max
        ini_set('max_execution_time', 10000);
        ini_set('memory_limit','1024M');
        DB::disableQueryLog();
        $this->validate($request, [
        'select_file'  => 'required|mimes:xls,xlsx,csv'
        ]);
        // get path of file and get filename
        $path = $request->file('select_file')->getRealPath();
        $file=$request->file('select_file')->getClientOriginalName();
        $filename = pathinfo($file, PATHINFO_FILENAME);
        //set file name

        //count time start
        $getrab="";
        $getrabs=[];
        $collection = (new FastExcel)->import($path);
        $arrayexcel=$collection->toArray();
        $getnorab="";
        // $getrabs=($arrayexcel[0]);
        // dd($getrabs->no_rab);
        // dd("$getrab");
        // dd($arrayexcel);

        foreach (array_chunk($arrayexcel,1000) as $key => $value)
        {
          DB::table("rab_khs_detil")->insert($value);
          $getnorab=($value[0]["no_rab"]);
        }

        $time = microtime(true) - $start;
        $nilai=DB::select('select sum(total_biaya)as tot from rab_khs_detil WHERE no_rab=:a',['a'=>$getnorab]);
        foreach ($nilai as $key => $value1) {
          $getsum=$value1;
       }
       // dd($getsum->tot);
        DB::table('master_rab')
         ->where('no_rab', $getnorab)
         ->update(['nilai_rab' => $getsum->tot]);

        return back()->with('success', "Insert data sukses");


      //  }
  }


  function indexexcelpk()
   {
    return view('import_excelrabpk');
   }


   function storeexcelpk(Request $request)
       {
        $start = microtime(true);
        // set request to 10000 second max
        ini_set('max_execution_time', 10000);
        ini_set('memory_limit','1024M');
        DB::disableQueryLog();
        $this->validate($request, [
        'select_file'  => 'required|mimes:xls,xlsx,csv'
        ]);
        // get path of file and get filename
        $path = $request->file('select_file')->getRealPath();
        $file=$request->file('select_file')->getClientOriginalName();
        $filename = pathinfo($file, PATHINFO_FILENAME);
        //set file name

        //count time start
        $getrab="";
        $getrabs=[];
        $collection = (new FastExcel)->import($path);
        $arrayexcel=$collection->toArray();
        $getnorab="";
        // $getrabs=($arrayexcel[0]);
        // dd($getrabs->no_rab);
        // dd("$getrab");
        // dd($arrayexcel);

        foreach (array_chunk($arrayexcel,1000) as $key => $value)
        {
          DB::table("rab_khs_detil")->insert($value);
          $getnorab=($value[0]["no_rab"]);
        }

        $time = microtime(true) - $start;
        $nilai=DB::select('select sum(total_biaya)as tot from rab_khs_detil WHERE no_rab=:a',['a'=>$getnorab]);
        foreach ($nilai as $key => $value1) {
          $getsum=$value1;
       }
       // dd($getsum->tot);
        DB::table('master_rab')
         ->where('no_rab', $getnorab)
         ->update(['nilai_rab' => $getsum->tot]);

        return back()->with('success', "Insert data sukses");


      //  }
   }


}
