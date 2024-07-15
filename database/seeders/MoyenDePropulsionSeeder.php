<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MoyenDePropulsion;

class MoyenDePropulsionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mdp = MoyenDePropulsion::newFactory()->count(10)->create();
    }
}
