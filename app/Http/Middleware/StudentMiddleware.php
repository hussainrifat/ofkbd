<?php

namespace App\Http\Middleware;

use Closure;

class StudentMiddleware
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
        if (auth()->check()) {
            if (auth()->user()->student) {
                return $next($request);
            }
            else{
                return redirect('login')->with('authErrors','You are not Login as Student');
            }
        }else{
            return redirect('login')->with('authErrors','You need to Sign in first');
        }
    }
}
