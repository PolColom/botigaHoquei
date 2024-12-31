<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class Idioma
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response{
        if (session()->has('idioma')) {  // si hi ha idioma al session 
            App::setLocale(session()->get('idioma'));  // establir-lo com a idioma         de la petició actual
        }
        return $next($request);
    }
}
