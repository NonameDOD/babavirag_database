<?php

namespace Database\Factories;

use App\Models\Ertekelesek;
use App\Models\Felhasznalok;
use App\Models\Termekek;
use Illuminate\Database\Eloquent\Factories\Factory;

class ErtekelesekFactory extends Factory
{
    protected $model = Ertekelesek::class;

    public function definition(): array
    {
        return [
            'termek_id' => Termekek::factory(),
            'felhasznalo_id' => Felhasznalok::factory(),
            'ertekeles' => fake()->numberBetween(1, 5),
            'kep_url' => null,
            'szoveg' => fake()->paragraph(),
            'datum' => now(),
            'jovahagyva' => false,
        ];
    }
}