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
        Schema::create('felhasznalok', function (Blueprint $table) {
            $table->id('felhasznalo_id');
            $table->string('email')->unique();
            $table->string('jelszo_hash');
            $table->string('keresztnev');
            $table->string('vezeteknev');
            $table->string('telefon')->nullable();
            $table->dateTime('regisztracio_datuma');
            $table->dateTime('utolso_belepes')->nullable();
            $table->enum('szerepkor', ['vasarlo', 'admin'])->default('vasarlo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('felhasznalok');
    }
};
