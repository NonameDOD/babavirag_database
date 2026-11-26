<?php

namespace Database\Factories;

use App\Models\Cimek;
use App\Models\Felhasznalok;
use Illuminate\Database\Eloquent\Factories\Factory;

class CimekFactory extends Factory
{
    protected $model = Cimek::class;

    public function definition(): array
    {
        return [
            'felhasznalo_id' => Felhasznalok::factory(),
            'iranyitoszam' => fake()->postcode(),
            'varos' => fake()->city(),
            'utca' => fake()->streetName(),
            'hazszam' => fake()->buildingNumber(),
            'emelet' => null,
            'ajto' => null,
            'alapertelmezett' => false,
            'cim_neve' => 'Otthon',
        ];
    }
}
