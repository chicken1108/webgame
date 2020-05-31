 <?php 
	Route::get('category','CategoryController@index') ->name('backend.category');

	Route::get('category-add','CategoryController@add') ->name('backend.category-add');
	Route::post('category-add','CategoryController@save') ->name('backend.category-add');

	Route::get('category-edit/{id}','CategoryController@edit') ->name('backend.category-edit');
	Route::post('category-edit/{id}','CategoryController@update') ->name('backend.category-edit');

	Route::get('category-delete/{id}','CategoryController@delete') ->name('backend.category-delete');
	

 ?>


