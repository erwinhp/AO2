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
Route::get ('/inputMA','smentara\inputMA@index');
Route::get ('/inputPRK','smentara\inputMA@indexprk');
// Route::post ('/inputMA','smentara\inputMA@index');
Route::get ('/getprksz','smentara\inputMA@getprksz');
Route::get ('/getkontraks','smentara\inputMA@getkontraks');
Route::post ('/storeprk','smentara\inputMA@storeprk');
Route::post ('/storekontrak','smentara\inputMA@storekontrak');
Route::post ('/storeadendum','smentara\inputMA@storeadendum');

//==this is construction//==INI Konstruksi
Route::get ('/bobot_pelaksanaan','Konstruksi\Cbobot_pelaksanaan@index');
Route::get('/getnorab','Konstruksi\Cbobot_pelaksanaan@getrab');
Route::get('/getdatarab','Konstruksi\Cbobot_pelaksanaan@getmaterial');

Route::get ('/home','homez@index');

//create spbj
Route::get ('/mspbj','SPBJ\Cspbjm@index');
//create SPBJ PK

Route::get ('/mspbjpk','Cspbjpk@index');
Route::get ('/cspbj','Cspbjpk@create');
Route::post ('/cspbj','Cspbpkj@store');
Route::get ('/mspbjsearch','Cspbjpk@search');


//RABNYA RABNY RABNYA RABNYA RBANY A;SLDFJALKSJDF \RAB\Cmrabpayung
//CMRABPASUNG
Route::get ('/cmasterabpayung','RAB\Cmrabpayung@index');
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


// Route::resource ('/mrab','Cmrab');
//ROUTE MASTER RAB
Route::post ('/cmrab','RAB\Cmrab@store');
Route::get ('/cmrab','RAB\Cmrab@create');
Route::get ('/mrab','RAB\Cmrab@index');
Route::get('/search','RAB\Cmrab@search');

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


Route::get ('/excelrabkhs','Cexcel@index');
Route::get ('/excelrabkhsz','Cexcel@store');
Route::post ('/excelrabkhsz','Cexcel@store');

Route::get ('/excelrabnonkhs','Cexcel@indexnonkhs');
Route::get ('/excelrabnonkhsz','Cexcel@storenonkhs');
Route::post ('/excelrabnonkhsz','Cexcel@storenonkhs');










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
  Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// Registration Routes...
  Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
  Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

// Password Reset Routes...
  Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
  Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
  Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
  Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
