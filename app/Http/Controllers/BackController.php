<?php

namespace App\Http\Controllers;
use Auth;
class BackController extends Controller
{
    public function __construct(){

    	$this->middleware(function ($request, $next) {
            if (Auth::check() && Auth::user()->group != 'admin') {
	    		return redirect()->route('home');
	    	}else{
	    		return $next($request);
	    	}
        });
    	
    }
}
