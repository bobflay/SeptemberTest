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

Route::get('/','HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users','UserController@index');
Route::get('/users/create','UserController@create');
Route::post('/users','UserController@store');
Route::get('/users/{id}/delete','UserController@destroy');
Route::get('/users/{id}/edit','UserController@edit');
Route::put('/users/{id}','UserController@update');
Route::get('/users/{id}','UserController@view');


Route::get('/addresses','AddressController@index');
Route::get('/addresses/create','AddressController@create');
Route::get('/addresses/{id}/delete','AddressController@destroy');
Route::get('/addresses/{id}/edit','AddressController@edit');
Route::get('/addresses/{id}','AddressController@view');
Route::post('/addresses','AddressController@store');
Route::put('/addresses/{id}','AddressController@update');