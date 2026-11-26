<?php

namespace Database\Seeders;

use App\Models\Felhasznalok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FelhasznalokSeeder extends Seeder
{
     public function run(): void
    {
        Felhasznalok::create([
            'email' => 'admin@babavirag.hu',
            'jelszo_hash' => Hash::make('password'),
            'keresztnev' => 'Admin',
            'vezeteknev' => 'Admin',
            'telefon' => '06301234567',
            'regisztracio_datuma' => now(),
            'szerepkor' => 'admin',
        ]);

        Felhasznalok::factory(20)->create();
    }
}
