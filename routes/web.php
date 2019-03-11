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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/dashboard', [ 'as'=>'admin.dashboard', 'uses' => 'DashboardController@index']);

Route::get('admin/user', [ 'as'=>'admin.user', 'uses' => 'AdminController@index']);
Route::get('admin/user/create', [ 'as'=>'admin.user.create', 'uses' => 'AdminController@create']);



