<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateUserRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:user-roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualitza els rols dels usuaris al projecte';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        DB::table('users')->where('email', 'admin@example.com')->update(['role' => 'admin']);
        DB::table('users')->where('email', '!=', 'admin@example.com')->update(['role' => 'user']);

        $this->info('Rols actualitzats correctament!');
    }
}
