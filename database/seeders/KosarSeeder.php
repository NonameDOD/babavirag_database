<?php

namespace Database\Seeders;

use App\Models\Felhasznalok;
use App\Models\Kosar;
use App\Models\Termekek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KosarSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Felhasznalok::all() as $felhasznalo) {
            $termekek = Termekek::inRandomOrder()->take(2)->get();

            foreach ($termekek as $termek) {
                Kosar::create([
                    'felhasznalo_id' => $felhasznalo->felhasznalo_id,
                    'termek_id' => $termek->termek_id,
                    'mennyiseg' => 1,
                    'hozzaadva_datum' => now(),
                ]);
            }
        }
    }
}
