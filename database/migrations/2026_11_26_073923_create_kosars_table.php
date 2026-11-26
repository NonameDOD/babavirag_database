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
        Schema::create('kosar', function (Blueprint $table) {
            $table->id('kosar_id');
            $table->foreignId('felhasznalo_id')->constrained('felhasznalok', 'felhasznalo_id')->cascadeOnDelete();
            $table->foreignId('termek_id')->constrained('termekek', 'termek_id')->cascadeOnDelete();
            $table->integer('mennyiseg')->default(1);
            $table->dateTime('hozzaadva_datum');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kosar');
    }
};
