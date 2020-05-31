<?php 
Route::get('backend/login',
	'Backend\AuthController@login')
->name('login');

Route::post('backend/login','Backend\AuthController@postLogin')
->name('backend.login');
?>