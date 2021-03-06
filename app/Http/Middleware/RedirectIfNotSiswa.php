<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotSiswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'siswa')
    {
		if(!auth()->guard($guard)->check()) {
            return redirect(route('login.siswa'));
        }
        return $next($request);
    }
}
