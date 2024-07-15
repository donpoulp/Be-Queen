<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorie')->insert([
            'name' => 'categorie 1',
            'description' => 'Vous retrouveré ici les velos déja construit par nos soins',
        ]);
        DB::table('categorie')->insert([
            'name' => 'categorie 2',
            'description' => 'Vous retrouverer ici les velos personnalisables de A à Z',
        ]);
        DB::table('categorie')->insert([
            'name' => 'categorie 3',
            'description' => 'Vous retrouverer ici la liste des element personnalisable disponnible pour nos velos',
        ]);
    }
}