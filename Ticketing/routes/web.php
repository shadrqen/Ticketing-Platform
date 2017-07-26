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

Route::get('/', 'JambolifeController@getIndex')->name('about');

Route::get('test', 'HomeController@getTest')->name('test');

Route::get('testing', 'HomeController@Testing')->name('testing');

Route::get('events/{id}', 'HomeController@getEvents')->name('events');

Route::get('buyticket', 'HomeController@buyticket')->name('buyticket');

Route::post('storedetails', 'HomeController@storedetails')->name('storedetails');

Route::post('removedetails', 'HomeController@removedetails')->name('removedetails');

Route::post('sort', 'HomeController@sort')->name('sort');

Route::post('getData', 'HomeController@getData')->name('getData');

Route::get('removesession', 'HomeController@removesession')->name('removesession');

Route::post('removechoice', 'HomeController@removechoice')->name('removechoice');

Route::post('confirm_details', 'HomeController@confirm_details')->name('confirm_details');

Auth::routes();

Route::get('jambolife', 'HomeController@index')->name('jambolife');

Route::post('jambo', 'HomeController@index')->name('jambo');

Route::get('logout', 'HomeController@getLogout')->name('jambolife');
