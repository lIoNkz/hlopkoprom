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

Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about');
Route::get('/aboutTest', 'SiteController@aboutTest');
Route::get('/products', 'SiteController@products');
Route::get('/products/{id}', 'SiteController@product');
Route::get('/contacts', 'SiteController@contacts');
Route::post('/contacts', [
	'uses'  => 	'SiteController@store',
	'as' => 'contact.store'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');