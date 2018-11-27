<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateByUsername
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
        return Auth::basic('email') ?: $next($request);
    }
}
