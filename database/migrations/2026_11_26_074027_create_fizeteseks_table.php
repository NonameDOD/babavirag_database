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
        Schema::create('fizetesek', function (Blueprint $table) {
            $table->id('fizetes_id');
            $table->foreignId('rendeles_id')->unique()->constrained('rendelesek', 'rendeles_id')->cascadeOnDelete();
            $table->string('fizetesi_mod')->nullable();
            $table->string('tranzakcio_id')->nullable();
            $table->enum('statusz', ['folyamatban', 'sikeres', 'sikertelen', 'visszateritett'])->default('folyamatban');
            $table->dateTime('fizetes_datuma')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fizetesek');
    }
};
