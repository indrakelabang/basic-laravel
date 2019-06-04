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

//Route::get('/', function () {return view('home');}); CARA LAMA
//Route::get('about',function (){return view('about');}); CARA LAMA


Route::view('/', 'home');

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');

Route::view('about', 'about');
//cara cepat tanpa function

/* Route::get('customers','CustomersController@index');
Route::get('customers/create','CustomersController@create');
Route::post('customers', 'CustomersController@store');
Route::get('customers/{customer}', 'CustomersController@show');
Route::get('customers/{customer}/edit', 'CustomersController@edit');
Route::patch('customers/{customer}', 'CustomersController@update');
Route::delete('customers/{customer}', 'CustomersController@destroy'); */

//cara lama di buat 1-1 per routenya
//yg di bawah cara baru lebih simple (karena semua view dan func sudah di dalam customerscontroller)

Route::resource('customers', 'CustomersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
