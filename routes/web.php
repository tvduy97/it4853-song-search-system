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
    return redirect()->route('basic.search');
});
Route::get('/ping', 'SolariumController@ping');
Route::get('/vananh', 'SolariumController@SearchFullText');

Route::get('/BasicSearch', 'SolariumController@basicSearch')->name('basic.search');
Route::get('/AdvancedSearch', 'SolariumController@advanceSearch')->name('advance.search');
Route::get('/Search/AdvancedResult', 'TestController@getAdvancedResult');

//
Route::group(['prefix' => 'admin'], function (){
	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('/login', 'Auth\LoginController@login');
	Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
	Route::get('/', 'HomeController@index')->name('home');
});
