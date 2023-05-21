<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class comprobaraccesoestudiante
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // validar que el usuario tenga los permisos correspondientes
        if (auth()->user()->hasRole('estudiante')) {
         return $response;
        }

        return $response;
    }
}
