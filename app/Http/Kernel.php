<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Defineix els comandaments personalitzats per a l'aplicació.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\UpdateUserRoles::class, // Registra el comandament
    ];

    /**
     * Define the application's route middleware.
     */
    protected $routeMiddleware = [
        // Altres middleware...
        'admin' => \App\Http\Middleware\AdminMiddleware::class, // AFEGIT PER ADMIN
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Programació automàtica de tasques
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
