<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;

class Systemadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {


        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->role == 'System_Admin') {
            return redirect()->route('systemadmin');
        }

        if (Auth::user()->role == 'Academic_staff') {
            return $next($request);
        }

        if (Auth::user()->role == 'College_Admin') {
            return redirect()->route('collegeadmin');
        }
}
}