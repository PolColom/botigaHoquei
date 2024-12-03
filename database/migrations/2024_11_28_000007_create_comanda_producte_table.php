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
        Schema::create('comanda_producte', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producte_id')->constrained(table:'productes')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('descompte')->default(false);
            $table->integer('percen_descompte');
            $table->integer('num_articles');
            $table->integer('preu_total');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comanda_producte');
    }
};
