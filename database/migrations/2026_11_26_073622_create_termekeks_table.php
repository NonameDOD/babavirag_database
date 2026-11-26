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
        Schema::create('termekek', function (Blueprint $table) {
            $table->id('termek_id');
            $table->foreignId('kategoria_id')->constrained('kategoriak', 'kategoria_id');
            $table->string('nev');
            $table->text('leiras')->nullable();
            $table->decimal('ar', 10, 2);
            $table->decimal('akcios_ar', 10, 2)->nullable();
            $table->string('cikkszam')->unique();
            $table->decimal('suly', 8, 2)->nullable();
            $table->string('meret')->nullable();
            $table->string('szin')->nullable();
            $table->string('anyag')->nullable();
            $table->string('kep_url')->nullable();
            $table->string('statusz')->nullable();
            $table->boolean('lathato')->default(true);
            $table->integer('keszlet_mennyiseg')->default(0);
            $table->dateTime('letrehozva');
            $table->dateTime('frissitve')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('termekek');
    }
};
