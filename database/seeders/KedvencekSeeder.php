<?php

namespace Database\Seeders;

use App\Models\Felhasznalok;
use App\Models\Kedvencek;
use App\Models\Termekek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KedvencekSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Felhasznalok::all() as $felhasznalo) {
            $termek = Termekek::inRandomOrder()->first();

            if (!$termek) {
                continue;
            }

            Kedvencek::create([
                'felhasznalo_id' => $felhasznalo->felhasznalo_id,
                'termek_id' => $termek->termek_id,
                'hozzaadva_datum' => now(),
            ]);
        }
    }
}
