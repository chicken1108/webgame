<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\BackController;
use Auth;

class HomeController extends BackController
{
     public function index()
    {
        return view('home.index');
    }
     public function about()
    {
        return view('frontend.about');
    }
    public function logout()
{
    Auth::logout();
    return redirect()->route('home');
}

}
