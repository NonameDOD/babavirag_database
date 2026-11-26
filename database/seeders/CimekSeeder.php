<?php

namespace Database\Seeders;

use App\Models\Cimek;
use App\Models\Felhasznalok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CimekSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Felhasznalok::all() as $felhasznalo) {
            Cimek::create([
                'felhasznalo_id' => $felhasznalo->felhasznalo_id,
                'iranyitoszam' => '1111',
                'varos' => 'Budapest',
                'utca' => 'Fő utca',
                'hazszam' => '10',
                'emelet' => '1',
                'ajto' => '2',
                'alapertelmezett' => true,
                'cim_neve' => 'Otthoni cím',
            ]);
        }
    }
}
