<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
		// dd();
        // if (Auth::guard($guard)->check()) {
			// if($guard === 'admin'){
				// return redirect('/admin');
			// }elseif($guard === 'tentor'){
				// return redirect('/tentor');
			// }elseif($guard === 'siswa'){
				// return redirect('/siswa');
			// }
            // return redirect('/');
        // }

        // return $next($request);
    }
}
