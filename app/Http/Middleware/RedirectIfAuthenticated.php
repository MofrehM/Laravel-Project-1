<?php

namespace App\Http\Middleware;

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
        $message=__('msg.AccountActivatedSucess');
        if (Auth::guard($guard)->check()) {
           Auth::logout();
            return redirect('/login')->with('message', $message);
        }

        return $next($request);
    }
}
