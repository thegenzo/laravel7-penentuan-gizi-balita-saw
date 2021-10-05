<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    
    Route::resource('tbu', 'TBUController');

    Route::resource('bbu', 'BBUController');
    
    Route::resource('bbtb', 'BBTBController');
    
    Route::resource('imtu', 'IMTUController');

    Route::get('/rekapan', 'SeleksiController@rekapanSAW');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,orangtua']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('orangtua', 'OrangtuaController');

    Route::resource('balita', 'BalitaController');

    Route::get('cek-balita', 'SeleksiController@seleksi');

    Route::post('cek-balita/status-gizi', 'SeleksiController@preferensiSAW');


});

