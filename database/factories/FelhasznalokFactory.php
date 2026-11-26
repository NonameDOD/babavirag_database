<?php

namespace Database\Factories;

use App\Models\Felhasznalok;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class FelhasznalokFactory extends Factory
{
    protected $model = Felhasznalok::class;

    public function definition(): array
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'jelszo_hash' => Hash::make('password'),
            'keresztnev' => fake()->firstName(),
            'vezeteknev' => fake()->lastName(),
            'telefon' => fake()->phoneNumber(),
            'regisztracio_datuma' => now(),
            'utolso_belepes' => null,
            'szerepkor' => 'vasarlo',
        ];
    }
}