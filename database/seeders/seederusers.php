<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;




class seederusers extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10 ; $i++)
        {
            // User::factory(10)->create();
            DB::table('users')->insert([
                'first_name' => Str::random(10),
                'last_name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'password' => Str::random(15),
                'civility' => Str::random(3),
                'adress' => Str::random(15),
                'city' => Str::random(15),
                'phone_number' => Str('0102030405'),
            ]);
        }
    }
}
