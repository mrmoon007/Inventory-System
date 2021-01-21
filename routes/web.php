<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/mm', function () {
    return view('layouts.admin');
});

// employee
Route::get('/add', 'employeeController@add')->name('add.employee');
Route::get('/all', 'employeeController@show')->name('all.employee');
Route::post('/create', 'employeeController@create')->name('create.employee');
Route::get('/view/{id}', 'employeeController@view')->name('view.employee');
Route::get('/edit/{id}', 'employeeController@edit')->name('edit.employee');
Route::get('/delete/{id}', 'employeeController@delete')->name('delete.employee');
Route::post('/update/{id}', 'employeeController@update')->name('update.employee');
