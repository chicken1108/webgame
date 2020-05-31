<?php 
	Route::get('order_detail/{id}',[
		'uses' => 'DonHangController@order_detail',
		'as' => 'backend.order_detail'
	]);
?>