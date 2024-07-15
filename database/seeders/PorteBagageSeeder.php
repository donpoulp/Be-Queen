<?php

namespace Database\Seeders;

use App\Models\PorteBagage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PorteBagageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pb = PorteBagage::newFactory()->count(10)->create(); 
    }
}
