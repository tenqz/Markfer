<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Mylogin
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
        if (Session::has('passwd'))
        {
           return $next($request);
        }
        return redirect('/');
    }
}
