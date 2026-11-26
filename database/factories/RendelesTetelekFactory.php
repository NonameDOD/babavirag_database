<?php

namespace Database\Factories;

use App\Models\Rendeles_tetelek;
use App\Models\Rendelesek;
use App\Models\Termekek;
use Illuminate\Database\Eloquent\Factories\Factory;

class Rendeles_tetelekFactory extends Factory
{
    protected $model = Rendeles_tetelek::class;

    public function definition(): array
    {
        $mennyiseg = fake()->numberBetween(1, 5);

        return [
            'rendeles_id' => Rendelesek::factory(),
            'termek_id' => Termekek::factory(),
            'mennyiseg' => $mennyiseg,
        ];
    }
}