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
        Schema::create('productes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_producte');
            $table->string('image_url')->nullable();
            $table->integer('quantitat_stock');
            $table->foreignId('tipus_producte_id')
                ->constrained('tipus_producte')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->decimal('preu', 8, 2); // Camp preu afegit
            $table->text('descripcio')->nullable(); // Camp descripció afegit
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints(); // Desactiva restriccions de claus foranes temporalment

        // Elimina la taula, gestionant primer les claus foranes
        if (Schema::hasTable('productes')) {
            Schema::table('productes', function (Blueprint $table) {
                if (Schema::hasColumn('productes', 'tipus_producte_id')) {
                    try {
                        $table->dropForeign(['tipus_producte_id']); // Elimina la clau forana si existeix
                    } catch (Throwable $e) {
                        // Si no existeix la clau forana, ignora l'error
                    }
                }
            });

            Schema::dropIfExists('productes'); // Elimina la taula
        }

        Schema::enableForeignKeyConstraints(); // Torna a activar les restriccions
    }
};
