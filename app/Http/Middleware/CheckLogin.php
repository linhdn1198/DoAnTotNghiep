<?php

namespace App\Http\Middleware;

use Auth;
use Session;
use Closure;

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
        Session::flash('error', __('admin.not_login'));

        return response()->view('login');
    }
}
