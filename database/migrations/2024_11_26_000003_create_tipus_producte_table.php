<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Crea la taula 'tipus_producte'
        Schema::create('tipus_producte', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('tipus');
            $table->string('talla')->nullable();
            $table->decimal('preu', 8, 2)->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Elimina la taula si existeix
        Schema::dropIfExists('tipus_producte');
    }
};
