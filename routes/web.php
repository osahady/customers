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

Route::view('contact', 'pages.contact');
Route::view('about', 'pages.about');
//Route::view('customers', 'pages.customers');
Route::get('customers', 'CustomersController@list');
Route::post('customers', 'CustomersController@store');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
