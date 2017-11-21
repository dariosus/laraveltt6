<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if (auth()->check() == false) {
          return redirect("/login");
        }

        if (auth()->user()->type == 1)
        {
          return redirect("/login");
        }

        return $next($request);
    }
}
