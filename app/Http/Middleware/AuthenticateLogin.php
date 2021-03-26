<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class AuthenticateLogin
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
        // dd(Session::has('session_login'));

        if( Session::getId('session_login')){
            return $next($request);
        }else{
            return view('admin.login');
        }
    }
}
