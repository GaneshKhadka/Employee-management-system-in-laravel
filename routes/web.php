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



Route::group(['middleware' => 'auth'], function (){

    Route::get('dashboard',              [ 'as'=>'dashboard',            'uses' => 'DashboardController@index']);

    Route::get('user',                   [ 'as'=>'user',                 'uses' => 'UserController@index']);
    Route::get('user/create',            [ 'as'=>'user.create',          'uses' => 'UserController@create']);
    Route::post('user/store',            [ 'as'=>'user.store',           'uses' => 'UserController@store']);
    Route::get('user/edit/{id}',         [ 'as'=>'user.edit',            'uses' => 'UserController@edit']);
    Route::post('user/update/{id}',           [ 'as'=>'user.update',     'uses' => 'UserController@update']);
    Route::get('user/delete/{id}',       [ 'as'=>'user.delete',          'uses' => 'UserController@delete']);

    Route::get('employee',               [ 'as'=>'employee',              'uses' => 'EmployeeController@index']);
    Route::get('employee/create',        [ 'as'=>'employee.create',       'uses' => 'EmployeeController@create']);
    Route::post('employee/store',        [ 'as'=>'employee.store',        'uses' => 'EmployeeController@store']);
    Route::get('employee/edit/{id}',     [ 'as'=>'employee.edit',         'uses' => 'EmployeeController@edit']);
    Route::post('employee/update/{id}',  [ 'as'=>'employee.update',       'uses' => 'EmployeeController@update']);
    Route::get('employee/delete/{id}',   [ 'as'=>'employee.delete',       'uses' => 'EmployeeController@delete']);

    Route::get('department',               [ 'as'=>'department',              'uses' => 'DepartmentController@index']);
    Route::get('department/create',        [ 'as'=>'department.create',       'uses' => 'DepartmentController@create']);
    Route::post('department/store',        [ 'as'=>'department.store',        'uses' => 'DepartmentController@store']);
    Route::get('department/edit/{id}',     [ 'as'=>'department.edit',         'uses' => 'DepartmentController@edit']);
    Route::post('department/update/{id}',  [ 'as'=>'department.update',       'uses' => 'DepartmentController@update']);
    Route::get('department/delete/{id}',   [ 'as'=>'department.delete',       'uses' => 'DepartmentController@delete']);

    Route::get('salary',               [ 'as'=>'salary',              'uses' => 'SalaryController@index']);
    Route::get('salary/create',        [ 'as'=>'salary.create',       'uses' => 'SalaryController@create']);
    Route::post('salary/store',        [ 'as'=>'salary.store',        'uses' => 'SalaryController@store']);
    Route::get('salary/edit/{id}',     [ 'as'=>'salary.edit',         'uses' => 'SalaryController@edit']);
    Route::post('salary/update/{id}',  [ 'as'=>'salary.update',       'uses' => 'SalaryController@update']);
    Route::get('salary/delete/{id}',   [ 'as'=>'salary.delete',       'uses' => 'SalaryController@delete']);

    Route::get('city',               [ 'as'=>'city',              'uses' => 'CityController@index']);
    Route::get('city/create',        [ 'as'=>'city.create',       'uses' => 'CityController@create']);
    Route::post('city/store',        [ 'as'=>'city.store',        'uses' => 'CityController@store']);
    Route::get('city/edit/{id}',     [ 'as'=>'city.edit',         'uses' => 'CityController@edit']);
    Route::post('city/update/{id}',  [ 'as'=>'city.update',       'uses' => 'CityController@update']);
    Route::get('city/delete/{id}',   [ 'as'=>'city.delete',       'uses' => 'CityController@delete']);

    Route::get('shift',               [ 'as'=>'shift',              'uses' => 'ShiftController@index']);
    Route::get('shift/create',        [ 'as'=>'shift.create',       'uses' => 'ShiftController@create']);
    Route::post('shift/store',        [ 'as'=>'shift.store',        'uses' => 'ShiftController@store']);
    Route::get('shift/edit/{id}',     [ 'as'=>'shift.edit',         'uses' => 'ShiftController@edit']);
    Route::post('shift/update/{id}',  [ 'as'=>'shift.update',       'uses' => 'ShiftController@update']);
    Route::get('shift/delete/{id}',   [ 'as'=>'shift.delete',       'uses' => 'ShiftController@delete']);
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




