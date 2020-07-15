<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   if(Auth::user()->role->name == 'customer'){
        return redirect('/home')->with('meassage', "You are not allowed to access.");
    }
        return $next($request);
    }
}
