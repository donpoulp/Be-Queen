<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(CadreSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(CustomProductsSeeder::class);
        $this->call(GuidonSeeder::class);
        $this->call(MoyenDePropulsionSeeder::class);
        $this->call(PedaleSeeder::class);
        $this->call(PoignierSeeder::class);
        $this->call(PorteBagageSeeder::class);
        $this->call(RoueSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(seederusers::class);
        $this->call(OrderProductSeeder::class);
        $this->call(CustomProductsSeeder::class);
    }
}
