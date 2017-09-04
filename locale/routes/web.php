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

//route user
Route::group(['middleware' => 'auth'], function () { 
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/mailist', 'HomeController@send')->name('mailist');

});

//route admin
Route::group(['middleware' => 'admin'], function () { 
Route::get('admin/index', 'UserController@index')->name('admin/index');
Route::get('admin/home', 'AdminController@home')->name('admin/home');
});