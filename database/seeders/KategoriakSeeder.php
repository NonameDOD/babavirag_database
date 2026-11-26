<?php

namespace Database\Seeders;

use App\Models\Kategoriak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriakSeeder extends Seeder
{
    public function run(): void
    {
        $viragok = Kategoriak::create([
            'nev' => 'Virágok',
            'leiras' => 'Különböző virágok',
            'sorrend' => 1,
        ]);

        $cserepes = Kategoriak::create([
            'nev' => 'Cserepes virágok',
            'leiras' => 'Beltéri és kültéri cserepes növények',
            'szulo_kategoria_id' => $viragok->kategoria_id,
            'sorrend' => 1,
        ]);

        Kategoriak::create([
            'nev' => 'Vágott virágok',
            'leiras' => 'Friss vágott virágok',
            'szulo_kategoria_id' => $viragok->kategoria_id,
            'sorrend' => 2,
        ]);

        Kategoriak::create([
            'nev' => 'Ajándékok',
            'leiras' => 'Virágos ajándékok',
            'sorrend' => 2,
        ]);

        Kategoriak::factory(5)->create();
    }
}
