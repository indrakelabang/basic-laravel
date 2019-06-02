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
Route::view('contact', 'contact'); //cara cepat tanpa function
Route::view('about', 'about'); //cara cepat tanpa function

Route::get('customers','CustomersController@index');
Route::get('customers/create','CustomersController@create');
Route::post('customers', 'CustomersController@store');
