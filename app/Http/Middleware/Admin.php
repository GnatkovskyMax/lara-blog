<?php

namespace App\Http\Middleware;
use App\Http\Middleware\Auth;
use Closure;

class Admin
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

        if(\Auth::user()->isAdmin == 0){
            return redirect(route('account'));
        }
        return $next($request);
    }
}
