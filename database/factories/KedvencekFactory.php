<?php

namespace Database\Factories;

use App\Models\Kedvencek;
use App\Models\Felhasznalok;
use App\Models\Termekek;
use Illuminate\Database\Eloquent\Factories\Factory;

class KedvencekFactory extends Factory
{
    protected $model = Kedvencek::class;

    public function definition(): array
    {
        return [
            'felhasznalo_id' => Felhasznalok::factory(),
            'termek_id' => Termekek::factory(),
            'hozzaadva_datum' => now(),
        ];
    }
}