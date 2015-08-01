<?php

namespace Disaster\Http\Middleware;

use Closure;

class AdminAuth
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
        if(! \Auth::check())
        {
            \Session::put('attemptUrl', \URL::current());
            return \Redirect::route('admin.get.login');
        }
        return $next($request);
    }
}
