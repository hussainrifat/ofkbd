<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if (session()->has('admin')) {
            return $next($request);
        }
        else{
            return redirect('admin_login')->with('authErrors','You are not Login as Admin');
        }
        }
    
}
