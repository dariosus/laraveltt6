<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UsuarioLogueado
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
        $user = Auth::user();

        session(["usuario" => $user]);

        return $next($request);
    }
}
