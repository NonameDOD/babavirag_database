<?php

namespace Database\Factories;

use App\Models\Rendelesek;
use App\Models\Felhasznalok;
use App\Models\Cimek;
use Illuminate\Database\Eloquent\Factories\Factory;

class RendelesekFactory extends Factory
{
    protected $model = Rendelesek::class;

    public function definition(): array
    {
        return [
            'felhasznalo_id' => Felhasznalok::factory(),
            'szallitasi_cim_id' => Cimek::factory(),
            'szamlazasi_cim_id' => Cimek::factory(),
            'rendeles_datuma' => now(),
            'statusz' => 'uj',
            'szallitasi_koltseg' => 1500,
            'szallitasi_mod' => 'futar',
            'megjegyzes' => null,
            'szamlazas_statusza' => false,
        ];
    }
}