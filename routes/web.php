<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
// Route::get('/', function () {
//     return view('welcome');
// });
//
Route::get ('/getprksbayarandkontrak','homez@getprksbayarandkontrak');
//KEU KEU KEU KEU KEU
Route::get ('/getsumsbyrs','keuangan\pembayaran@getsumsbyrs');
Route::get ('/indexbayars','keuangan\pembayaran@index');
Route::get ('/getdatabayar','keuangan\pembayaran@getdatabayar');
Route::post ('/storebyr','keuangan\pembayaran@storebyr');
Route::put('/updatebyrkontrak/{id_kontrak}','keuangan\pembayaran@updatebyrkontrak');
Route::put('/updatebyr/{id_bayar}','keuangan\pembayaran@updatebyr');
Route::get ('/indexbuatpembayanrans','keuangan\pembayaran@indexbuatpembayanrans');

//keuangan keuangan keuangan keuangan keuangan
Route::get ('/index_rencana_pembayaran','keuangan\rencana_pembayaran@index');
Route::get ('/getdatarencanabayar','keuangan\rencana_pembayaran@getdatarencanabayar');
Route::post ('/storerpbyr','keuangan\rencana_pembayaran@storerpbyr');


Route::get ('/verifikasirabs','keuangan\verifikasi_rab@index');
Route::get ('/getdataverifikasi','keuangan\verifikasi_rab@getdataverifikasi');
Route::get ('/getmasterrabid','keuangan\verifikasi_rab@getmasterrabid');
// Route::put('/lalala/{no_rab}','keuangan\verifikasi_rab@lalala');

Route::put('/updateverifikasirab/{id_master_rab}','keuangan\verifikasi_rab@updateverifikasirab');


Route::get ('/pdd','Pengadaan\pengawas_dan_direksis@index');
Route::post ('/storepdd','Pengadaan\pengawas_dan_direksis@storepdd');


Route::get ('/inputPembayaran','CMApembayaran@index');
Route::get ('/DetilPembayaran','CMApembayaran@indexdetilpembayaran');
Route::get ('/gettermyn','CMApembayaran@gettermyn');
Route::get ('/getdetilpembayaran','CMApembayaran@getdetilpembayaran');



// Route::post ('/inputMA','smentara\inputMA@index');
Route::get ('/getprksz','smentara\inputMA@getprksz');
Route::get ('/getkontraks','smentara\inputMA@getkontraks');
Route::post ('/storeprk','smentara\inputMA@storeprk');
Route::post ('/storekontrak','smentara\inputMA@storekontrak');
Route::post ('/storeadendum','smentara\inputMA@storeadendum');
Route::post ('/storejamlak','smentara\inputMA@storejamlak');

//ADDENDUM ADDENDUMADDENDUMADDENDUMADDENDUM ADDENDUM ADDENDUM ADDENDUM ADDENDUM ADDENDUM ADDENDUM
Route::get ('/getdataaddendumsz','Konstruksi\addendum@getdataaddendumsz');
Route::get ('/addendums','Konstruksi\addendum@index');
Route::post ('/storeaddendums','Konstruksi\addendum@storeaddendums');

Route::get ('/getlokasis','Konstruksi\pengawasans@getlokasis');
Route::get ('/getkontraksdata','Konstruksi\pengawasans@getkontraksdata');
Route::get ('/inputpengawasans','Konstruksi\pengawasans@index');
Route::post ('/storepengawasan','Konstruksi\laporan_pengawasz@storepengawasan');

//LAPORAN PENGAWAS LAPORAN PENGAWAS LAPORAN PENGAWAS
Route::post ('/storelaporankons','Konstruksi\laporan_pengawasz@storelaporankons');
Route::get ('/laporankonst','Konstruksi\laporan_pengawasz@index');
Route::get ('/getlaporandata','Konstruksi\laporan_pengawasz@getlaporandata');

//CDACDACDACDA
Route::post ('/storecda','Konstruksi\cda@storecda');
Route::get ('/cda','Konstruksi\cda@index');
Route::get ('/getcdadata','Konstruksi\cda@getcdadata');
//==this is construction//==INI Konstruksi
Route::get ('/bobot_pelaksanaan','Konstruksi\Cbobot_pelaksanaan@index');
Route::get('/getnorab','Konstruksi\Cbobot_pelaksanaan@getrab');
Route::get('/editbobotindex','Konstruksi\Cbobot_pelaksanaan@editbobotindex');
Route::get('/getdate','Konstruksi\Cbobot_pelaksanaan@getdate');
Route::get('/getcount','Konstruksi\Cbobot_pelaksanaan@getcount');
Route::post ('/storebobot','Konstruksi\Cbobot_pelaksanaan@storebobot');
Route::get ('/getdataedit','Konstruksi\Cbobot_pelaksanaan@getdataedit');
Route::get('/getdatarab','Konstruksi\Cbobot_pelaksanaan@getmaterial');
Route::put('/updatebobot/{id_bobot}','Konstruksi\Cbobot_pelaksanaan@update');
Route::get('/getmaterialpenawaran','Konstruksi\Cbobot_pelaksanaan@getmaterialpenawaran');

//this is chart ren construction ini chart ren konstruksi

Route::get ('/gettgldatacek','Konstruksi\Ccharts_perencanaan@gettgldatacek');
Route::get ('/getdatarennewprosentase','Konstruksi\Ccharts_perencanaan@getdatarennewprosentase');
Route::get ('/chart_ren','Konstruksi\Ccharts_perencanaan@index');
Route::post ('/chart_renpost','Konstruksi\Ccharts_perencanaan@storepoint');
Route::get ('/getcurves','Konstruksi\Ccharts_perencanaan@getcurves');
Route::get ('/gettglsperencanaans','Konstruksi\Ccharts_perencanaan@gettglsperencanaans');
Route::get ('/getsum','Konstruksi\Ccharts_perencanaan@getsum');
Route::get ('/getdatachart','Konstruksi\Ccharts_perencanaan@getdatachart');
Route::get ('/indexedits','Konstruksi\Ccharts_perencanaan@indexedits');
Route::put('/updatechart/{id_chartren}','Konstruksi\Ccharts_perencanaan@updatechart');
Route::get ('/chartsbobot','Konstruksi\charts@index');
Route::get ('/getdatlaks','Konstruksi\charts@getdatlak');
Route::get ('/getdatrens','Konstruksi\charts@getdatren');
Route::get ('/gettanggalbbt','Konstruksi\charts@gettanggalbbt');
Route::get ('/getnokontrakrab','Konstruksi\charts@getnokontrakrab');


Route::get ('/home','homez@index');

//create spbj
Route::get ('/mspbj','SPBJ\Cspbjm@index');
//create SPBJ PK

Route::get ('/mspbjpk','Cspbjpk@index');
Route::get ('/cspbj','Cspbjpk@create');
Route::post ('/cspbj','Cspbjpk@store');
Route::get ('/mspbjsearch','Cspbjpk@search');


//RABNYA RABNY RABNYA RABNYA RBANY A;SLDFJALKSJDF \RAB\Cmrabpayung
//CMRABPASUNG

Route::get ('/getprkspbj','RAB\Cmrabpayung@getprkspbj');
Route::get ('/cmasterabpayung','RAB\Cmrabpayung@index');
Route::get ('/getprkszz','RAB\Cmrabpayung@getprksz');
Route::get ('/cmasterabpayungs','RAB\Cmrabpayung@create');
Route::post ('/cmasterabpayungs','RAB\Cmrabpayung@store');
Route::get ('/cmasterabpayungsearch','RAB\Cmrabpayung@search');
Route::get('/getnospbj','RAB\Cmrabpayung@getspbj');

//MASTER MASTER MASTER MASTER RAB PAYUNG RAB PAYUNG RAB PAYUNG RAB Crabpayung
//untuk membuat kontrak sementara tidak usah dulu.
//controller cmabpayung
Route::get ('/mrabpayung','Crabpayung@index');
Route::post ('/Cmrabpayung','Crabpayung@store');
Route::get ('/Cmrabpayung','Crabpayung@create');
Route::get('/searchpayung','Crabpayung@search');




Route::resource ('/MA','Cindex');
Route::resource ('/detilindex','detilindex');
Route::get ('/MAdetilgenfetch','detilindex@fetch_datagen');
Route::get ('/MAdetilpekfetch','detilindex@fetch_datapek');
Route::get ('/inputMA','smentara\inputMA@index');
Route::get ('/inputPRK','smentara\inputMA@indexprk');

// Route::resource ('/mrab','Cmrab');
//ROUTE MASTER RAB
Route::post ('/cmrab','RAB\Cmrab@store');
Route::get ('/cmrab','RAB\Cmrab@create');
Route::get ('/mrab','RAB\Cmrab@index');
Route::get('/search','RAB\Cmrab@search');
Route::get('/getprkszzz','RAB\Cmrab@getprkszzz');




Route::post ('/cmrabnon','RAB\Crabnonkhsmaster@store');
Route::get ('/cmrabnon','RAB\Crabnonkhsmaster@create');
Route::get ('/mrabnonkhs','RAB\Crabnonkhsmaster@index');
Route::get('/searchnon','RAB\Crabnonkhsmaster@search');

//ROUTE DETIL RAB
Route::resource ('/Rdetil','RAB\Cdetilrab');
Route::get ('/Rdetilfetch','RAB\Cdetilrab@fetch_data');
Route::get ('/Rdetilfetchtransport','RAB\Cdetilrab@fetch_datatransport');
Route::get ('/idmrab','RAB\Cdetilrab@index');
Route::get('/searchmaterialjasa','RAB\Cdetilrab@dataAjax');
Route::get('/searchmaterialjasatr','RAB\Cdetilrab@dataAjaxtr');
Route::get ('/rgetmat','RAB\Cdetilrab@datamatget');
Route::get ('/rgetmattr','RAB\Cdetilrab@datamatgettr');


Route::resource ('/Rdetilnon','RAB\Cdetilrabnonkhs');
Route::get ('/Rdetilfetchnon','RAB\Cdetilrabnonkhs@fetch_data');
Route::get ('/idmrabnon','RAB\Cdetilrabnonkhs@index');



Route::get ('/excelpk','Cexcel@indexexcelpk');
Route::post ('/storeexcelpk','Cexcel@storeexcelpk');


Route::get ('/excelrabkhs','Cexcel@index');
Route::get ('/excelrabkhsz','Cexcel@store');
Route::post ('/excelrabkhsz','Cexcel@store');

Route::get ('/excelrabnonkhs','Cexcel@indexnonkhs');
Route::get ('/excelrabnonkhsz','Cexcel@storenonkhs');
Route::post ('/excelrabnonkhsz','Cexcel@storenonkhs');


//pengadaan this is pengadaan ini Pengadaan MADUDE
Route::get ('/rab_penawarans','Pengadaan\rab_penawaran@index');
Route::get ('/getmaxid','Pengadaan\rab_penawaran@getmaxid');
Route::get ('/getvendor','Pengadaan\rab_penawaran@getvendor');
Route::post ('/storerab_penawaran','Pengadaan\rab_penawaran@storerab_penawaran');
Route::get ('/edit_rabpenawaran','Pengadaan\rab_penawaran@edit_rabpenawaran');
Route::get ('/getdatavendror','Pengadaan\rab_penawaran@getdatavendror');
Route::put('/update_rabpenawaran/{id_detilrab}','Pengadaan\rab_penawaran@update_rabpenawaran');
Route::get ('/iputvendors','Pengadaan\inputvendor@index');
Route::post ('/storevendor','Pengadaan\inputvendor@storevendor');

Route::get ('/metodelelangs','Pengadaan\metode_lelang@index');
Route::get ('/getpekerjaan','Pengadaan\metode_lelang@getnamapekerjaan');
Route::post ('/storemetodelelang','Pengadaan\metode_lelang@storemetodelelang');
Route::get ('/gettotalbayarszsz','Konstruksi\addendum@gettotalbayarszsz');



Route::get ('/jadwallelangs','Pengadaan\jadwal_lelang@index');
Route::post ('/storejadwallelangs','Pengadaan\jadwal_lelang@storejadwallelangs');
Route::get ('/getrks','Pengadaan\jadwal_lelang@getrks');
Route::get ('/indexeditjadwal','Pengadaan\jadwal_lelang@indexeditjadwal');
Route::get ('/getrksjadwal','Pengadaan\jadwal_lelang@getrksjadwal');
Route::get ('/editjadwallelangs','Pengadaan\jadwal_lelang@editjadwallelangs');
Route::get ('/getdatajadwal','Pengadaan\jadwal_lelang@getdatajadwal');
Route::put('/updatejadwallelang/{id_jadwal_lelang}','Pengadaan\jadwal_lelang@updatejadwallelang');
Route::get ('/indexviewjadwal','Pengadaan\jadwal_lelang@indexviewjadwal');

Route::get ('/indexpesertalelangs','Pengadaan\peserta_lelang@index');
Route::get ('/getrabsmetode','Pengadaan\peserta_lelang@getrabsmetode');
Route::get ('/getmetodes','Pengadaan\peserta_lelang@getmetodes');
Route::post ('/storepesertalelang','Pengadaan\peserta_lelang@storepesertalelang');
Route::get ('/indexeditpesertalelangs','Pengadaan\peserta_lelang@indexeditpesertalelangs');
Route::get ('/getdatafulleditpesertalelang','Pengadaan\peserta_lelang@getdatafulleditpesertalelang');
Route::get ('/getrabvendorsz','Pengadaan\peserta_lelang@getrabvendorsz');
Route::put ('/editpesertalelang/{id_peserta_lelang}','Pengadaan\peserta_lelang@editpesertalelang');

Route::get ('/buatkontraks','smentara\inputMA@index');


Route::group(['prefix' => '/'], function()
{
    if ( Auth::check() ) // use Auth::check instead of Auth::user
    {
          Route::resource ('/MA','Cindex');
    } else{
        Route::get('/', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
        Route::post('/', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    }
});


  // Route::get('/', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
  // Route::post('/', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
  // Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
  Route::get('logout', 'Auth\LoginController@logout', function () {
      return abort(404);
  });



// Registration Routes...
  Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
  Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

// Password Reset Routes...
  Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
  Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
  Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
  Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
