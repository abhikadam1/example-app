<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgeMiddleware
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
        // echo "Testing  middleware";
        $age = $request->route('age1');
        if ($age < 18) {
            return response()->json(
                ['message' => 'You are not allowed to access this page'],
                403
            );
        }
        // return $next($request);

        return $next($request);
    }
}
