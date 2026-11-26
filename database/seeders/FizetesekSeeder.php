<?php

namespace Database\Seeders;

use App\Models\Fizetesek;
use App\Models\Rendelesek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FizetesekSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Rendelesek::all() as $rendeles) {
            Fizetesek::create([
                'rendeles_id' => $rendeles->rendeles_id,
                'fizetesi_mod' => $rendeles->fizetesi_mod,
                'tranzakcio_id' => null,
                'statusz' => 'folyamatban',
                'fizetes_datuma' => null,
            ]);
        }
    }
}
