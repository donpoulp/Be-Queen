<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 50; $i++) {
            DB::table('custom_products')->insert([
                'cadre_id' => rand(1,10),
                'moyen_de_propulsion_id' => rand(1,10),
                'roue_id' => rand(1,10),
                'porte_bagage_id' => rand(1,10),
                'guidon_id' => rand(1,10),
                'poignier_id' => rand(1,10),
                'pedale_id' => rand(1,10),
                'order_id' => rand(1, 10),
            ]);
        }
    }
}
