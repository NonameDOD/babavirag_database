<?php

namespace Database\Factories;

use App\Models\Termekek;
use App\Models\Kategoriak;
use Illuminate\Database\Eloquent\Factories\Factory;

class TermekekFactory extends Factory
{
    protected $model = Termekek::class;

    public function definition(): array
    {
        return [
            'kategoria_id' => Kategoriak::factory(),
            'nev' => fake()->words(3, true),
            'leiras' => fake()->paragraph(),
            'ar' => fake()->randomFloat(2, 500, 50000),
            'akcios_ar' => null,
            'cikkszam' => fake()->unique()->bothify('SKU-####'),
            'suly' => fake()->randomFloat(2, 0.1, 10),
            'meret' => fake()->randomElement(['S', 'M', 'L', 'XL']),
            'szin' => fake()->safeColorName(),
            'anyag' => fake()->company(),
            'kep_url' => null,
            'statusz' => fake()->word(),
            'lathato' => true,
            'keszlet_mennyiseg' => fake()->numberBetween(0, 100),
            'letrehozva' => now(),
            'frissitve' => now(),
        ];
    }
}