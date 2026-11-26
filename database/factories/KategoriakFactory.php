<?php

namespace Database\Factories;

use App\Models\Kategoriak;
use Illuminate\Database\Eloquent\Factories\Factory;

class KategoriakFactory extends Factory
{
    protected $model = Kategoriak::class;

    public function definition(): array
    {
        return [
            'nev' => fake()->unique()->words(2, true),
            'leiras' => fake()->sentence(),
            'szulo_kategoria_id' => null,
            'sorrend' => fake()->numberBetween(1, 100),
        ];
    }
}