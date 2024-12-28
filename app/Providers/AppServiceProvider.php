<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider{
    public function boot(){
        // Defineix el Gate per administrar
        Gate::define('administrar', function ($user) {
            return $user->role === 'admin'; 
        });
    }

    public function register(): void{
        //
    }
}
