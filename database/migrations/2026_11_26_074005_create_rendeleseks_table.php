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
        Schema::create('rendelesek', function (Blueprint $table) {
            $table->id('rendeles_id');
            $table->foreignId('felhasznalo_id')->constrained('felhasznalok', 'felhasznalo_id');
            $table->foreignId('szallitasi_cim_id')->constrained('cimek', 'cim_id');
            $table->foreignId('szamlazasi_cim_id')->constrained('cimek', 'cim_id');
            $table->dateTime('rendeles_datuma');
            $table->enum('statusz', ['uj', 'feldolgozas_alatt', 'feladva', 'teljesitve', 'torolve'])->default('uj');
            $table->decimal('szallitasi_koltseg', 10, 2)->default(0);
            $table->string('szallitasi_mod');
            $table->text('megjegyzes')->nullable();
            $table->boolean('szamlazas_statusza')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendelesek');
    }
};
