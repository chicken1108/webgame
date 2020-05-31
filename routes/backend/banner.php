<?php 

Route::get('banner',[
	'uses' => 'BannerController@index',
	'as' => 'backend.banner'
]);

Route::get('banner-create',[
	'uses' => 'BannerController@create',
	'as' => 'backend.banner-create'
]);

Route::post('banner-create',[
	'uses' => 'BannerController@store',
	'as' => 'backend.banner-create'
]);

Route::get('banner-delete/{id}',[
	'uses' => 'BannerController@delete',
	'as' => 'backend.banner-delete'
]);

Route::get('banner-edit/{id}',[
	'uses' => 'BannerController@edit',
	'as' => 'backend.banner-edit'
]);

Route::post('banner-edit/{id}',[
	'uses' => 'BannerController@update',
	'as' => 'backend.banner-edit'
]);

?>