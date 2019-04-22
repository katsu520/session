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

Route::group(['prefix' => 'admin'], function() {
  Route::get('home/create', 'Admin\HomeController@add')->middleware('auth');
  Route::get('howto/create', 'Admin\HowtoController@add');
  Route::get('search/create', 'Admin\SearchController@add');
  Route::get('nami/create', 'Admin\NamiController@add');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
