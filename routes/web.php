<?php 

	

	//Danh cho Backend

	Route::group(['prefix' => 'backend','namespace'=>'Backend','middleware'=>'auth'],function(){
				require_once 'backend/category.php';
				require_once 'backend/home.php';
				require_once 'backend/user.php';
				require_once 'backend/banner.php';
				require_once 'backend/product.php';
				require_once 'backend/code.php';
				require_once 'backend/thongke.php';
				require_once 'backend/order_detail.php';
				require_once 'backend/logout.php';
	});

	// Danh cho Frontend

	require_once 'auth.php';
	require_once 'frontend.php';
 ?>


 <!-- Tao Model cho tung bang -->

 <?php 

// Chuc Nang them: 
 /*
	1. Xac dinh lam chuc nang cho bang nao
		VD: bang user: co Model App\Model\User
					   Co Controller App\Http\Controllers\Backend\UserController
					   Co Views App\Views\User\add.blade.php
	2. Route::get Hien thi form them moi
	   Route::post Thuc hien them moi
 */
  ?>