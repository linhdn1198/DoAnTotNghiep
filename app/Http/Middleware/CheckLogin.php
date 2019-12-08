<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Session;

class CheckLogin
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
        if (Auth::check()) {
            return $next($request);
        }
        
        return response()->json(['message' => 'Not allow, plase login'], 405);
    }
}
