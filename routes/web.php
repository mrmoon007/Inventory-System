<?php

use Illuminate\Support\Facades\Auth;
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

// employee route here
Route::get('/add', 'employeeController@add')->name('add.employee');
Route::get('/all', 'employeeController@show')->name('all.employee');
Route::post('/create', 'employeeController@create')->name('create.employee');
Route::get('/view/{id}', 'employeeController@view')->name('view.employee');
Route::get('/edit/{id}', 'employeeController@edit')->name('edit.employee');
Route::get('/delete/{id}', 'employeeController@delete')->name('delete.employee');
Route::post('/update/{id}', 'employeeController@update')->name('update.employee');


//customers routes here
Route::get('/customer/add', 'customerController@index')->name('add.customer');
Route::get('/customer/all', 'customerController@show')->name('all.customer');
Route::post('/customer/create', 'customerController@create')->name('create.customer');
Route::get('/customer/view/{id}', 'customerController@view')->name('view.customer');
Route::get('/customer/edit/{id}', 'customerController@edit')->name('edit.customer');
Route::get('/customer/delete/{id}', 'customerController@delete')->name('delete.customer');
Route::post('/customer/update/{id}', 'customerController@update')->name('update.customer');


// salary routes here
Route::get('/salary/add', 'salaryController@addSalary')->name('add.salary');
Route::get('/salary/all', 'salaryController@allSalary')->name('all.salary');



// attendance routes here
Route::get('/attendance/take', 'attendanceController@takeAttendance')->name('take.attendance');
Route::post('/attendance/insert', 'attendanceController@insertAttendance')->name('insert.attendance');
Route::get('/attendance/all', 'attendanceController@allAttendance')->name('all.attendance');
Route::get('/attendance/edit/{edit}', 'attendanceController@edit')->name('edit.attendance');
Route::post('/attendance/update', 'attendanceController@update_attendance')->name('update.attendance');

//categories routes here
Route::get('/category/add', 'CategoriesController@addCategory')->name('add.category');
Route::post('/category/create', 'CategoriesController@createCategory')->name('create.category');
Route::get('/category/all', 'CategoriesController@allCategory')->name('all.category');
Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('edit.category');
Route::get('/category/delete/{id}', 'CategoriesController@delete')->name('delete.category');
Route::post('/category/update/{id}', 'CategoriesController@update')->name('update.category');



//products routes here
Route::get('/product/add', 'ProductController@index')->name('add.products');
Route::get('/products/all', 'ProductController@show')->name('all.products');
Route::post('/product/create', 'ProductController@create')->name('create.products');
Route::get('/product/view/{id}', 'ProductController@view')->name('view.products');
Route::get('/product/edit/{id}', 'ProductController@edit')->name('edit.products');
Route::get('/product/delete/{id}', 'ProductController@delete')->name('delete.products');
Route::post('/product/update/{id}', 'ProductController@update')->name('update.products');


//Pos routes here
Route::get('/pos', 'PosController@index')->name('pos');

// cart route here

Route::post('/add_cart', 'PosController@addCart')->name('add-cart');
Route::post('/update_cart/{rowId}', 'PosController@updateCart')->name('cart_update');
Route::get('/delete_cart/{rowId}', 'PosController@deleteCart')->name('cart_delete');
Route::post('/invoice/', 'PosController@invoice')->name('invoice');
Route::get('/invoice/{id}', 'PosController@createPDF')->name('pdf');

