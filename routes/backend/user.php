 <?php 
	Route::get('user','UserController@index') ->name('backend.user');

	Route::get('user-add','UserController@add') ->name('backend.user-add');
	Route::post('user-add','UserController@save') ->name('backend.user-add');

	Route::get('user-edit/{id}','UserController@edit') ->name('backend.user-edit');
	Route::post('user-edit/{id}','UserController@update') ->name('backend.user-edit');

	Route::get('user-delete/{id}','UserController@destroy') ->name('backend.user-delete');

	/*Khách hàng*/
	Route::get('customer','UserController@customer') ->name('backend.customer');


 ?>


