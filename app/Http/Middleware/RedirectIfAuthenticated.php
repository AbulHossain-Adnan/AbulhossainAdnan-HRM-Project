<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->role_id == 1) {
            return redirect()->route('admin.dashboard');
         
        }
        elseif (Auth::guard($guard)->check() && Auth::user()->role_id ==2) {
            return redirect()->route('employee.dashboard');
        }
        else {
            return $next($request);
        }      
    }
}
