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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
});


//Route::get('admin/profile/edit', 'Admin\ProfileController@edit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//課題Laraver12 2.3
Route::get('admin/profile/create', 'Admin\ProfileController@add')->middleware('auth');

Route::get('admin/profile/edit', 'Admin\ProfileController@add')->middleware('auth');

//課題Laravel 13-3
Route::post('profile/create', 'Admin\ProfileController@create');

//課題Laravel 13-6

Route::post('profile/edit', 'Admin\ProfileController@update');
