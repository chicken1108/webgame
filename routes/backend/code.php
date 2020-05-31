 <?php 
	Route::get('code','CodeController@index') ->name('backend.code');

	Route::get('code-add','CodeController@add') ->name('backend.code-add');
	Route::post('code-add','CodeController@store') ->name('backend.code-add');

	Route::get('code-edit/{id}','CodeController@edit') ->name('backend.code-edit');
	Route::post('code-edit/{id}','CodeController@update') ->name('backend.code-edit');

	Route::get('code-delete/{id}','CodeController@destroy') ->name('backend.code-delete');
	

 ?>


