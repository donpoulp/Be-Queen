<?php

namespace Database\Seeders;

use App\Models\Poignier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoignierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Poignier = Poignier::newFactory()->count(10)->create();
    }
}
