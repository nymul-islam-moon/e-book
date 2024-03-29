<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CanLogin
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
        if ( auth()->user()->status == 1 && auth()->user()->deleted_at == null ) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'You are not allowed to access this area.');
    }
}
