<?php

namespace Database\Factories;

use App\Models\Fizetesek;
use App\Models\Rendelesek;
use Illuminate\Database\Eloquent\Factories\Factory;

class FizetesekFactory extends Factory
{
    protected $model = Fizetesek::class;

    public function definition(): array
    {
        return [
            'rendeles_id' => Rendelesek::factory(),
            'fizetesi_mod' => 'bankkartya',
            'statusz' => 'sikeres',
            'fizetes_datuma' => now(),
        ];
    }
}