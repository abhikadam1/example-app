<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GroupMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (1 != 1) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }else{
            echo "Group Middleware Called ";
            // return response()->json(['msg'=> "Group middleware called"] );
        }
        return $next($request);
    }
}
