<?php 
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\BackController;
use Auth;

/**
 * summary
 */
class AuthController extends BackController
{
    /**
     * summary
     */
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        // dd($request->only('username','password'));

        if (Auth::attempt($request->only('username','password'),$request->has('remember'))) {
        	return redirect()->route('backend.index')->with('success','Chao mung tro lai');
        }else{
        	return redirect()->back()->with('error','Tai khoan hoac mat khau khong dung');
        }
    }

}
 ?>