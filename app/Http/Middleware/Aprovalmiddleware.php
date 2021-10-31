<?php

namespace App\Http\Middleware;

use Closure;
use Alert;

class Aprovalmiddleware
{
 
    public function handle($request, Closure $next)
    {
        if(Auth()->check()){
            if(!Auth()->user()->status==1){
               
                Auth()->Logout();
                
               return redirect()->route('login')->with('msg','you have no permision yet to access');
            }
        }
        return $next($request);
    }
}
