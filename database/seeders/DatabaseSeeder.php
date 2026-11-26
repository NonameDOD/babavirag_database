<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            FelhasznalokSeeder::class,
            KategoriakSeeder::class,
            CimekSeeder::class,
            TermekekSeeder::class,
            RendelesekSeeder::class,
            RendelesTetelekSeeder::class,
            KosarSeeder::class,
            ErtekelesekSeeder::class,
            FizetesekSeeder::class,
            KedvencekSeeder::class,
        ]);
    }
}
