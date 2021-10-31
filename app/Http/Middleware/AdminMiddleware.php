<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->role_id ==1){
            return $next($request);
        }
    else {
        alert()->error('Opps','you have no permission to access');
        return back();
 }
}
}
