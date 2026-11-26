<?php

namespace Database\Seeders;

use App\Models\Kategoriak;
use App\Models\Termekek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermekekSeeder extends Seeder
{
    public function run(): void
    {
        $kategoriak = Kategoriak::all();

        foreach ($kategoriak as $kategoria) {
            for ($i = 1; $i <= 5; $i++) {
                Termekek::create([
                    'kategoria_id' => $kategoria->kategoria_id,
                    'nev' => $kategoria->nev . ' termék ' . $i,
                    'leiras' => 'Minőségi virágtermék.',
                    'ar' => rand(1000, 15000),
                    'akcios_ar' => null,
                    'cikkszam' => 'TERM-' . $kategoria->kategoria_id . '-' . $i,
                    'suly' => 1.5,
                    'meret' => 'M',
                    'szin' => 'piros',
                    'anyag' => 'Babavirág',
                    'kep_url' => null,
                    'lathato' => true,
                    'keszlet_mennyiseg' => rand(5, 100),
                    'statusz' => 'igen',
                    'letrehozva' => now(),
                    'frissitve' => now(),
                ]);
            }
        }
    }
}
