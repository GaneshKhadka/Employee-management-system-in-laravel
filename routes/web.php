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



Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => 'auth'], function (){

    Route::get('dashboard',              [ 'as'=>'dashboard',            'uses' => 'DashboardController@index']);

    Route::get('user',                   [ 'as'=>'user',                 'uses' => 'UserController@index']);
    Route::get('user/create',            [ 'as'=>'user.create',          'uses' => 'UserController@create']);
    Route::post('user/store',            [ 'as'=>'user.store',          'uses' => 'UserController@store']);
    Route::get('user/edit/{id}',         [ 'as'=>'user.edit',            'uses' => 'UserController@edit']);
    Route::post('user/update',           [ 'as'=>'user.update',        'uses' => 'UserController@update']);
    Route::get('user/delete',            [ 'as'=>'user.delete',         'uses' => 'UserController@delete']);
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




