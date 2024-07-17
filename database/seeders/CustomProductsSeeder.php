<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('custome_product')->insert([
            'cadre_id' => rand(1,10),
            'moyen_de_propulsion_id' => rand(1,10),
            'roue_id' => rand(1,10),
            'porte_bagage_id' => rand(1,10),
            'guidon_id' => rand(1,10),
            'poignier_id' => rand(1,10),
            'pedale_id' => rand(1,10),
        ]);
    }
}
