<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AdminAuthenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected function redirectTo($request)
    {
        if(!\Session::all()){
            return route('login');
        }
    }
}
