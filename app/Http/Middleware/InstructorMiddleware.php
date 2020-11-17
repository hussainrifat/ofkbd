<?php

namespace App\Http\Middleware;

use Closure;

class InstructorMiddleware
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
            if (auth()->user()->instructor) {
                return $next($request);
            }
            else{
                return redirect('login')->with('authErrors','You are not Login as Instructor');
            }
        }else{
            return redirect('login')->with('authErrors','You need to Sign in first');
        }
    }
}
