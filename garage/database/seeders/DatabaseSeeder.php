<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as F;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bebras',
            'email' => 'Bebras@gmail.com',
            'password' => Hash::make('123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Briedis',
            'email' => 'Briedis@gmail.com',
            'password' => Hash::make('123'),
        ]);
        $faker = F::create('den_DEN');
        foreach(range(1, 69) as $_){
            DB::table('mechanics')->insert([
                'name' => $faker->firstName(),
                'surname' => $faker->lastName(),
            ]);
        }
    }
}
