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
        Schema::create('ertekelesek', function (Blueprint $table) {
            $table->id('ertekeles_id');
            $table->foreignId('termek_id')->constrained('termekek', 'termek_id')->cascadeOnDelete();
            $table->foreignId('felhasznalo_id')->constrained('felhasznalok', 'felhasznalo_id')->cascadeOnDelete();
            $table->integer('ertekeles');
            $table->string('kep_url')->nullable();
            $table->text('szoveg')->nullable();
            $table->dateTime('datum');
            $table->boolean('jovahagyva')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ertekelesek');
    }
};
