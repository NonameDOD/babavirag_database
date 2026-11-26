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
        Schema::create('rendeles_tetelek', function (Blueprint $table) {
            $table->id('tetel_id');
            $table->foreignId('rendeles_id')->constrained('rendelesek', 'rendeles_id')->cascadeOnDelete();
            $table->foreignId('termek_id')->constrained('termekek', 'termek_id');
            $table->integer('mennyiseg');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendeles_tetelek');
    }
};
