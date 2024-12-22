<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Afegim el camp "role" per definir el rol de cada usuari
            $table->string('role')
                  ->default('user') // Per defecte, el rol és "user"
                  ->after('password'); // Afegim el camp després del "password"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Eliminem el camp "role" si revertim la migració
            $table->dropColumn('role');
        });
    }
}
