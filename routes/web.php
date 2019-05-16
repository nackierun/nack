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
Route::get('about', function () {
    return view('about'); //แบบที่1
});

Route::view('contact', 'contact'); //แบบที่2

Route::get('customers', 'CustomersController@index');
Route::get('customers/create', 'CustomersController@create');//
Route::post('customers', 'CustomersController@store');//บันทึกข้อมูลด้วยฟังชั่นในcontroller
Route::get('company', 'CompanyController@index');
Route::get('company/create', 'CompanyController@create');
Route::post('company', 'CompanyController@store');
Route::get('customers/{customer}','CustomersController@show');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
