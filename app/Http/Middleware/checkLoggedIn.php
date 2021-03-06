<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::user()){
          return redirect()->route('home-login');
        }
          return $next($request);
    }
}
