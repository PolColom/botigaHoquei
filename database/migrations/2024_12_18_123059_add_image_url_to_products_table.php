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
        Schema::table('productes', function (Blueprint $table) {
            if (!Schema::hasColumn('productes', 'image_url')) {
                $table->string('image_url')->nullable()->after('nom_producte');
            }
        });
    }

    public function down(): void
    {
        Schema::table('productes', function (Blueprint $table) {
            if (Schema::hasColumn('productes', 'image_url')) {
                $table->dropColumn('image_url');
            }
        });
    }

};
