<?php

namespace Database\Seeders;

use App\Models\Cimek;
use App\Models\Felhasznalok;
use App\Models\Rendelesek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RendelesekSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Felhasznalok::all() as $felhasznalo) {
            $cim = Cimek::where(
                'felhasznalo_id',
                $felhasznalo->felhasznalo_id
            )->first();

            if (!$cim) {
                continue;
            }

            Rendelesek::create([
                'felhasznalo_id' => $felhasznalo->felhasznalo_id,
                'szallitasi_cim_id' => $cim->cim_id,
                'szamlazasi_cim_id' => $cim->cim_id,
                'rendeles_datuma' => now(),
                'statusz' => 'uj',
                'szallitasi_koltseg' => 1500,
                'szallitasi_mod' => 'futar',
                'megjegyzes' => null,
                'szamlazas_statusza' => false,
            ]);
        }
    }
}
