<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Alert;

class EmployeeMiddleware
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
        if(Auth::check() && Auth::user()->role_id ==2){
            return $next($request);
        }
    else {
        alert()->error('Opps','you have no permission to access');
        return back();
    }
}
}

