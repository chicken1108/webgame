<?php 

Route::get('logout',[
			'uses' => 'HomeController@logout',
			'as' => 'backend.logout'
		]);
 ?>