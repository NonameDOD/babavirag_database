<?php

namespace Database\Seeders;

use App\Models\Ertekelesek;
use App\Models\Felhasznalok;
use App\Models\Termekek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ErtekelesekSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Felhasznalok::all() as $felhasznalo) {
            $termek = Termekek::inRandomOrder()->first();

            if (!$termek) {
                continue;
            }

            Ertekelesek::create([
                'termek_id' => $termek->termek_id,
                'felhasznalo_id' => $felhasznalo->felhasznalo_id,
                'ertekeles' => rand(3, 5),
                'kep_url' => null,
                'szoveg' => 'Nagyon szép termék, elégedett vagyok!',
                'datum' => now(),
                'jovahagyva' => true,
            ]);
        }
    }
}
