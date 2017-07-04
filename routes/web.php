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

Route::get("ui",function(){
	return view('ui.master');
});
Route::get("index",['as'=>'index','uses'=>'uiController@index']);
Route::get("post",['as'=>'post','uses'=>'uiController@post']);
Route::get("add",['as'=>'add','uses'=>'uiController@add']);


Route::get("admin",['as'=>'admin','uses'=>'aiController@admin']);
Route::prefix('admin')->group(function () {
	Route::get("admin/user",['as'=>'admin.user','uses'=>'aiController@user']);
	Route::get("admin/conf",['as'=>'admin.conf','uses'=>'aiController@conf']);
	Route::get("admin/view",['as'=>'admin.view','uses'=>'aiController@view']);

	Route::resource('cate','catesController');
	Route::resource('post','postsController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
