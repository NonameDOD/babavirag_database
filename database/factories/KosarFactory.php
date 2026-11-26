<?php

namespace Database\Factories;

use App\Models\Kosar;
use App\Models\Felhasznalok;
use App\Models\Termekek;
use Illuminate\Database\Eloquent\Factories\Factory;

class KosarFactory extends Factory
{
    protected $model = Kosar::class;

    public function definition(): array
    {
        return [
            'felhasznalo_id' => Felhasznalok::factory(),
            'termek_id' => Termekek::factory(),
            'mennyiseg' => fake()->numberBetween(1, 5),
            'hozzaadva_datum' => now(),
        ];
    }
}