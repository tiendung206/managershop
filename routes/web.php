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

		// Đăng nhập
					
		Route::get('admin/login',['as'=>'login', 'uses'=>'Auth\LoginController@getLogin']);
		Route::post('admin/login','Auth\LoginController@postLogin');

		Route::group(['prefix'=>'admin'], function()
			{
				Route::get('register',['as'=>'auth.register','uses'=>'RegisterController@index']);
				Route::post('register',['as'=>'auth.register','uses'=>'RegisterController@store']);
						
			});

		Route::group(['middleware'=>'auth'], function()

		{
			// bang dieu khien
			Route::get('dashboard',function(){
				return view ('admin.dashboard');
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
				Route::post('list',['as'=>'admin.product.list','uses'=>'ProductController@index']);	

				Route::get('create',['as'=>'admin.product.create','uses'=>'ProductController@create']);
				Route::post('create',['as'=>'admin.product.store','uses'=>'ProductController@store']);

				Route::get('edit/{id}',['as'=>'admin.product.edit','uses'=>'ProductController@edit']);
				Route::post('edit/{id}',['as'=>'admin.product.update','uses'=>'ProductController@update']);
				
				Route::get('delete/{id}',['as'=>'admin.product.destroy','uses'=>'ProductController@destroy']);


			});
			// quản lý đơn hàng
			Route::group(['prefix'=>'order'],function()
			{
				Route::get('list',['as'=>'admin.order.list','uses'=>'OrderController@index']);
				Route::post('list',['as'=>'admin.order.list','uses'=>'OrderController@index']);	

				Route::get('create',['as'=>'admin.order.create','uses'=>'OrderController@create']);
				Route::post('create',['as'=>'admin.order.store','uses'=>'OrderController@store']);

				Route::get('edit/{id}',['as'=>'admin.order.edit','uses'=>'OrderController@edit']);
				Route::post('edit/{id}',['as'=>'admin.order.update','uses'=>'OrderController@update']);
				
				Route::get('delete/{id}',['as'=>'admin.order.destroy','uses'=>'OrderController@destroy']);
			});

			// quản lý banner
			Route::group(['prefix'=>'banner'],function()
			{
				Route::get('list',['as'=>'admin.banner.list','uses'=>'BannerController@index']);
				Route::post('list',['as'=>'admin.banner.list','uses'=>'BannerController@index']);	

				Route::get('create',['as'=>'admin.banner.create','uses'=>'BannerController@create']);
				Route::post('create',['as'=>'admin.banner.store','uses'=>'BannerController@store']);

				Route::get('edit/{id}',['as'=>'admin.banner.edit','uses'=>'BannerController@edit']);
				Route::post('edit/{id}',['as'=>'admin.banner.update','uses'=>'BannerController@update']);
				
				Route::get('delete/{id}',['as'=>'admin.banner.destroy','uses'=>'BannerController@destroy']);
			});

			

		});

		Route::get('/logout',['as'=>'getLogout', 'uses'=>'Auth\LoginController@getLogout']);

		// fontend
		
			//danh sach san phẩm
			Route::get('/', ['as'=>'fontend.layout.home','uses'=>'IndexController@indexproduct']);
			// 
			


