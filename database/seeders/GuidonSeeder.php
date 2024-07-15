<?php

namespace Database\Seeders;

use App\Models\Guidon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuidonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guidon = Guidon::newFactory()->count(10)->create();
    }
}
