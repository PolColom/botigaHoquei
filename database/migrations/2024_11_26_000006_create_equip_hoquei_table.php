<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipHoqueiTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equip_hoquei', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('poblacio');
            $table->unsignedBigInteger('usuari_id');
            $table->timestamps();

            $table->foreign('usuari_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equip_hoquei');
    }
}
