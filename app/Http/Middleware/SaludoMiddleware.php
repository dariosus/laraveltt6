<?php

namespace App\Http\Middleware;

use Closure;

class SaludoMiddleware
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
        echo "Bienvenido a mi sitio<br>";
        return $next($request);
    }
}
