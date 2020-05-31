<?php 


		Route::get('/','FrontendController@index')->name('home');

		Route::get('about','FrontendController@about')->name('about'); //name -> cho den the a trong main.blade.php
		Route::get('contact','FrontendController@contact')->name('contact'); //name -> cho den the a trong main.blade.php
		Route::get('product','FrontendController@about')->name('product'); //name -> cho den the a trong main.blade.php
		Route::get('category/{id}','FrontendController@category')->name('category'); //name -> cho den the a trong main.blade.php
		Route::get('gamebanquyen','FrontendController@gamebanquyen')->name('gamebanquyen'); //name -> cho den the a trong main.blade.php
		Route::get('dieukhoandichvu','FrontendController@dieukhoandichvu')->name('dieukhoandichvu'); //name -> cho den the a trong main.blade.php
		Route::get('userinfo', 'FrontendController@userInfo')->name('userinfo');
		Route::post('updateinfo', 'FrontendController@updateInfo')->name('updateinfo');
		Route::post('changpassword', 'FrontendController@changePassword')->name('changpassword');
		Route::get('transaction-history', 'FrontendController@transactionHistory')->name('transaction-history');
		
		
		// Chi tiet san pham

		Route::get('product/{slug}','FrontendController@product')->name('product'); //name -> cho den the a trong main.blade.ph
		Route::get('product-all','FrontendController@product_all')->name('product-all'); //name -> cho den the a trong main.blade.ph

		Route::get('add-cart/{id}','FrontendController@add_cart')->name('add-cart'); //name -> cho den the a trong main.blade.php
		Route::get('ajax-add-cart/{id}','FrontendController@ajax_add_cart')->name('ajax-add-cart'); //name -> cho den the a trong main.blade.php
		Route::get('view-cart','FrontendController@view_cart')->name('view-cart'); //name -> cho den the a trong main.blade.php
		Route::get('remove-item/{id}','FrontendController@remove_item')->name('remove-item'); //name -> cho den the a trong main.blade.php
		//update san pham
		Route::get('update-cart/{id?}/{quantity?}','FrontendController@update_cart')->name('update-cart'); //name -> cho den the a trong main.blade.php
		Route::get('clear-cart','FrontendController@clear_cart')->name('clear-cart'); //name -> cho den the a trong main.blade.php
		Route::get('checkout','FrontendController@checkout')->name('checkout')->middleware('checkLoggedIn'); //name -> cho den the a trong main.blade.php

		Route::post('checkout','FrontendController@post_checkout')->name('checkout')->middleware('checkLoggedIn'); //name -> cho den the a trong main.blade.php
		Route::get('payment', 'FrontendController@payment')->name('payment')->middleware('checkLoggedIn');
		Route::get('checkout/success', 'FrontendController@success')->name('success');
		Route::get('pay/{orderId}', 'FrontendController@getPay')->name('pay');
		Route::post('create_payment','FrontendController@createPayment')->name('create.payment');
		Route::get('checkout/vnpay_return','FrontendController@getResultPay')->name('result.pay');

		Route::get('cus-order',[
			'uses' => 'FrontendController@cus_order',
			'as' => 'cus-order'
		]);

		Route::get('order_detail/{id}',[
			'uses' => 'FrontendController@order_detail',
			'as' => 'order_detail'
		]);
		Route::get('home-login',[
			'uses' => 'FrontendController@login',
			'as' => 'home-login'
		]);
		Route::get('registration',[
			'uses' => 'FrontendController@registration',
			'as' => 'registration'
		]);
		Route::post('registration',[
			'uses' => 'FrontendController@save',
			'as' => 'registration'
		]);

		Route::post('home-login',[
			'uses' => 'FrontendController@post_login',
			'as' => 'home-login'
		]);

		Route::get('home-logout',[
			'uses' => 'FrontendController@logout',
			'as' => 'home-logout'
		]);


		//Tim Kiem


		Route::get('search','FrontendController@search')->name('search');
		Route::post('autocomplete', 'FrontendController@autocompleteSearch')->name('autocomplete-search');
		?>