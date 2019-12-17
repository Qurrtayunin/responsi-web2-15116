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
Route::get('/info', function () {
    return view('info');
});

Route::resource('/jobs', 'JobsController');
// Route::('/jobs', 'JobsController');
Route::resource('/employees', 'EmployeesController');
// Route::('/employees', 'EmployeesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


