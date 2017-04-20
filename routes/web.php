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

Route::get('/cities', 'CityController@index');
Route::get('/cities/create', 'CityController@create');
Route::get('/cities/{id}/edit', 'CityController@edit');
Route::get('/cities/{id}/delete', 'CityController@delete');
Route::post('/cities/save', 'CityController@save');


Route::get('/counties', 'CountyController@index');
Route::get('/counties/create', 'CountyController@create');
Route::get('/counties/{id}/edit', 'CountyController@edit');
Route::get('/counties/{id}/delete', 'CountyController@delete');
Route::post('/counties/save', 'CountyController@save');
Route::get('/counties/{id}', 'CountyController@cities');

Auth::routes();

Route::get('/home', 'HomeController@index');
