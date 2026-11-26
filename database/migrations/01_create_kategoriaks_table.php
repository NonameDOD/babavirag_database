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
        Schema::create('kategoriak', function (Blueprint $table) {
            $table->id('kategoria_id');
            $table->string('nev');
            $table->text('leiras')->nullable();
            $table->unsignedBigInteger('szulo_kategoria_id')->nullable();
            $table->integer('sorrend')->default(0);

            $table->foreign('szulo_kategoria_id')
                ->references('kategoria_id')->on('kategoriak')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoriak');
    }
};
