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

Route::get('/', function () {
    return view('welcome');
});




Route::group(['prefix'=>'offers'],function(){

    Route::get('liste','CrudController@getOffers');
    Route::post('store','CrudController@storeOffer')->name('offers.store');
    Route::get('create','CrudController@createOffer');
});


