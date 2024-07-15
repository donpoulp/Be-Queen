<?php

namespace Database\Seeders;

use App\Models\Pedale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pedale = Pedale::newFactory()->count(10)->create();
    }
}
