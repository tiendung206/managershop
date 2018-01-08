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

		Route::get('dashboard',function(){
			return view ('admin.dashboard');
		});
		// Đăng nhập
					
			Route::get('admin/login','Auth\LoginController@getLogin');
			Route::post('admin/login','Auth\LoginController@postLogin');		
		



		Route::group(['prefix'=>'admin'], function()
		{

			Route::get('register',['as'=>'auth.register','uses'=>'RegisterController@index']);
			Route::post('register',['as'=>'auth.register','uses'=>'RegisterController@store']);
					
		});

		// category
		Route::group(['prefix'=>'category'], function()
		{
			Route::get('list',['as'=>'admin.category.list','uses'=>'CategoryController@index']);

			Route::get('create',['as'=>'admin.category.create','uses'=>'CategoryController@create']);
			Route::post('create',['as'=>'admin.category.store','uses'=>'CategoryController@store']);

			Route::get('edit/{id}',['as'=>'admin.category.edit','uses'=>'CategoryController@edit']);
			Route::post('edit/{id}',['as'=>'admin.category.update','uses'=>'CategoryController@update']);
			
			Route::get('delete/{id}',['as'=>'admin.category.destroy','uses'=>'CategoryController@destroy']);			
		});

		// product
		Route::group(['prefix'=>'product'], function()
		{
			Route::get('list',['as'=>'admin.product.list','uses'=>'ProductController@index']);

			Route::get('create',['as'=>'admin.product.create','uses'=>'ProductController@create']);
			Route::post('create',['as'=>'admin.product.store','uses'=>'ProductController@store']);

			Route::get('edit/{id}',['as'=>'admin.product.edit','uses'=>'ProductController@edit']);
			Route::post('edit/{id}',['as'=>'admin.product.update','uses'=>'ProductController@update']);
			
			Route::get('delete/{id}',['as'=>'admin.product.destroy','uses'=>'ProductController@destroy']);			
		});





