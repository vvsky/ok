<?php

namespace App\Http\Middleware;

use Closure;

class HomeloginMiddleware
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
        if(session('hid')){
           return $next($request);
        }else{
           return redirect('/login');
        }
    }
}
