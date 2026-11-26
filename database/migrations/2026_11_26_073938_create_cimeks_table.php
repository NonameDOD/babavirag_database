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
        Schema::create('cimek', function (Blueprint $table) {
            $table->id('cim_id');
            $table->foreignId('felhasznalo_id')->constrained('felhasznalok', 'felhasznalo_id')->cascadeOnDelete();
            $table->string('iranyitoszam');
            $table->string('varos');
            $table->string('utca');
            $table->string('hazszam');
            $table->string('emelet')->nullable();
            $table->string('ajto')->nullable();
            $table->boolean('alapertelmezett')->default(false);
            $table->string('cim_neve')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cimek');
    }
};
