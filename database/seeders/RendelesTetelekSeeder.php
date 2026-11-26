<?php

namespace Database\Seeders;

use App\Models\Rendeles_tetelek;
use App\Models\Rendelesek;
use App\Models\Termekek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RendelesTetelekSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Rendelesek::all() as $rendeles) {
            $termek = Termekek::first();

            if (!$termek) {
                continue;
            }

            Rendeles_tetelek::create([
                'rendeles_id' => $rendeles->rendeles_id,
                'termek_id' => $termek->termek_id,
                'mennyiseg' => 2,
            ]);
        }
    }
}
