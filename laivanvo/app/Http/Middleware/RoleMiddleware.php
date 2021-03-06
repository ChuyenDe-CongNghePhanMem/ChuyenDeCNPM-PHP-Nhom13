<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        if(!Auth::user() || Auth::user()->role->name!=$role)
        {
            return redirect()->route('login');
            abort('khong dc phep',503);
        }
        return $next($request);
    }
}
