<?php

namespace App\Http\Middleware;

use Closure;

class RedirectifNotDosen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'dosen')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('/dosen/login');
        }

        return $next($request);
    }
