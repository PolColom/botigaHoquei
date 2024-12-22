<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || auth()->user()->role !== 'admin') {
            return redirect('/')->with('error', 'No tens permisos per accedir a aquesta pàgina.');
        }

        return $next($request);
    }
}
