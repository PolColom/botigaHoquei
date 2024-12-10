<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider{

    public function boot(){
        Gate::define('administrar', function ($user) {
            // una funció que retorna cert o fals segons si s'ha d'obrir o no la porta
            return $user->admin;
        });

    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    
}
