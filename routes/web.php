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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','IndexController@index');

Route::match(['get','post'],'/admin','AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']],function(){
	Route::get('/admin/dashboard','AdminController@dashboard');
	Route::get('/admin/setting','AdminController@setting');
	Route::resource('/admin/categories', 'CategoryController');
	Route::resource('/admin/breakingnews','BreakingNewController');
	Route::resource('/admin/information','InformationController');
	Route::resource('/admin/namaj','NamajController');
	Route::resource('/admin/busniess','BusAddController');
	
});


Route::get('/logout','AdminController@logout');
