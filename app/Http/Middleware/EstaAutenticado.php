<?php

namespace App\Http\Middleware;
use Closure;
use Auth;


class EstaAutenticado
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
        $user = auth()->user();
        if (Auth::check()) {
            return $next($request);
        }
        else return redirect()->route('login');
    }
}
