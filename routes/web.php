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
Route::GET('/demo',['as'=>'viewDemo','uses'=>'postsController@viewDemo']);

Route::get("ui",function(){
	return view('ui.master');
});
Route::get("index",['as'=>'index','uses'=>'uiController@index']);
Route::get("post/{id}",['as'=>'post','uses'=>'uiController@post']);

Route::get("admin",['as'=>'admin','uses'=>'aiController@admin']);
Route::prefix('admin')->group(function () {
	Route::get("view",['as'=>'admin.view','uses'=>'aiController@view']);

	Route::resource('user','usersController');
	Route::resource('conf','confsController');
	Route::resource('cate','catesController');
	Route::resource('post','postsController');
	Route::PUT('post/check/{id}',['as'=>'post.check','uses'=>'postsController@check']);
	Route::GET('post/view/{id}',['as'=>'post.view','uses'=>'postsController@view']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
