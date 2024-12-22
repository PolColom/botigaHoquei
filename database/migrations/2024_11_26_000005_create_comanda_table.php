<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comanda', function (Blueprint $table) {
            $table->id();

            // Camp 'nom' per identificar la comanda
            $table->string('nom');

            // Relació amb la taula 'users'
            $table->foreignId('usuari_id')
                ->constrained('users') // Especifica la taula 'users'
                ->onUpdate('cascade') // Actualitza en cascada
                ->onDelete('cascade'); // Elimina en cascada

            // Relació amb la taula 'productes'
            $table->foreignId('producte_id')
                ->constrained('productes') // Especifica la taula 'productes'
                ->onUpdate('cascade') // Actualitza en cascada
                ->onDelete('cascade'); // Elimina en cascada

            // Data de la comanda
            $table->date('data');

            // Camps de timestamps
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Elimina la taula 'comanda'
        Schema::dropIfExists('comanda');
    }
};
