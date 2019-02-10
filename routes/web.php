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

Route::get('/', 'HomeController@index');
Route::get('bikes','HomeController@bikes')->name('bikes');
Route::get('parts','HomeController@parts')->name('parts');
Route::get('accessories','HomeController@accessories')->name('accessories');

Auth::routes();

Route::get('/admin_dashboard', 'DashboardController@index')->name('admin_dashboard');
Route::get('/admin_dashboard/create', 'DashboardController@create');
Route::post('/admin_dashboard/store', 'ProductController@store')->name('store');

