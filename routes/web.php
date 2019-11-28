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
Route::get ('/home','homez@index');

//create spbj
Route::get ('/mspbj','SPBJ\Cspbjm@index');
//create SPBJ PK

Route::get ('/mspbjpk','Cspbjpk@index');
Route::get ('/cspbj','Cspbjpk@create');
Route::post ('/cspbj','Cspbpkj@store');
Route::get ('/mspbjsearch','Cspbjpk@search');


//RABNYA RABNY RABNYA RABNYA RBANY A;SLDFJALKSJDF Cmrabpayung
//CMRABPASUNG
Route::get ('/cmasterabpayung','Cmrabpayung@index');
Route::get ('/cmasterabpayungs','Cmrabpayung@create');
Route::post ('/cmasterabpayungs','Cmrabpayung@store');
Route::get ('/cmasterabpayungsearch','Cmrabpayung@search');
Route::get('/getnospbj','Cmrabpayung@getspbj');

//MASTER MASTER MASTER MASTER RAB PAYUNG RAB PAYUNG RAB PAYUNG RAB Crabpayung
//untuk membuat kontrak sementara tidak usah dulu.
//controller cmabpayung
Route::get ('/mrabpayung','Crabpayung@index');
Route::post ('/cmrabpayung','Crabpayung@store');
Route::get ('/cmrabpayung','Crabpayung@create');
Route::get('/searchpayung','Crabpayung@search');




Route::resource ('/MA','Cindex');
Route::resource ('/detilindex','detilindex');
Route::get ('/MAdetilgenfetch','detilindex@fetch_datagen');
Route::get ('/MAdetilpekfetch','detilindex@fetch_datapek');


// Route::resource ('/mrab','Cmrab');
//ROUTE MASTER RAB
Route::post ('/cmrab','Cmrab@store');
Route::get ('/cmrab','Cmrab@create');
Route::get ('/mrab','Cmrab@index');
Route::get('/search','Cmrab@search');

Route::post ('/cmrabnon','Crabnonkhsmaster@store');
Route::get ('/cmrabnon','Crabnonkhsmaster@create');
Route::get ('/mrabnonkhs','Crabnonkhsmaster@index');
Route::get('/searchnon','Crabnonkhsmaster@search');

//ROUTE DETIL RAB
Route::resource ('/Rdetil','Cdetilrab');
Route::get ('/Rdetilfetch','Cdetilrab@fetch_data');
Route::get ('/Rdetilfetchtransport','Cdetilrab@fetch_datatransport');
Route::get ('/idmrab','Cdetilrab@index');
Route::get('/searchmaterialjasa','Cdetilrab@dataAjax');
Route::get('/searchmaterialjasatr','Cdetilrab@dataAjaxtr');
Route::get ('/rgetmat','Cdetilrab@datamatget');
Route::get ('/rgetmattr','Cdetilrab@datamatgettr');


Route::resource ('/Rdetilnon','cdetilrabnonkhs');
Route::get ('/Rdetilfetchnon','cdetilrabnonkhs@fetch_data');
Route::get ('/idmrabnon','cdetilrabnonkhs@index');


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
