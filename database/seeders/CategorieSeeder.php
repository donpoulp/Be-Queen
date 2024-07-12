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
            'name' => 'categorie1',
            'description' => 'blabfzefzefczergergzela',
        ]);
        DB::table('categorie')->insert([
            'name' => 'categorie2',
            'description' => 'bezbebzbtzbbzbztbzbbztb',
        ]);
        DB::table('categorie')->insert([
            'name' => 'categorie3',
            'description' => 'zbtrbzbzhzrthzthzbtzbztbzbtzbt',
        ]);
    }
}
