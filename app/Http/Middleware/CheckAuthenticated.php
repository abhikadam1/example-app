<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next, $age = 10, $arr = null)
    {   
        // dd($arr);
        if ($age < 18) {
            echo "<pre> You are not allowed $age";
            exit;
        }else{
            echo "Yes you are allowed $age";
            exit;            
        }
        // if (!Auth::check()) {
        //     return redirect('login');
        // }
        // return $next($request);
    }
}
