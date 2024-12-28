<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        //Verificar si l'usuari té el rol d'admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        //Si no té permisos:
        return redirect('/')->with('error', 'No tens permís per accedir a aquesta pàgina.');
    }
}
