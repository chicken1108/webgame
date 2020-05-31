 <?php 
	Route::get('product','ProductController@index') ->name('backend.product');

	Route::get('product-add','ProductController@add') ->name('backend.product-add');
	Route::post('product-add','ProductController@save') ->name('backend.product-add');

	Route::get('product-edit/{id}','ProductController@edit') ->name('backend.product-edit');
	Route::post('product-edit/{id}','ProductController@update') ->name('backend.product-edit');

	Route::get('product-delete/{id}','ProductController@destroy') ->name('backend.product-delete');
	

 ?>


