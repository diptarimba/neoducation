<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotTentor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'tentor')
    {
		if(!auth()->guard($guard)->check()) {
            return redirect(route('login.tentor'));
        }
        return $next($request);
    }
}
