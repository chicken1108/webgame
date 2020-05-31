<?php 


Route::get('transaction-history','ThongKeController@transactionHistory') ->name('backend.transaction-history');
Route::get('product-sold','ThongKeController@productSold') ->name('backend.product-sold');
 ?>