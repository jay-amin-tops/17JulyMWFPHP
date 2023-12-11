<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;


class product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // \DB::table('users')->insert([
        //     'name' => $faker->name,
        //     'email' => $faker->unique()->safeEmail,
        //     'password' => bcrypt('password'),
        // ]);
        // DB::table('users')->insert([
        //     'name' => $faker->name,
        //     'email' => $faker->unique()->safeEmail,
        //     'password' => bcrypt('password'),
        // ]);
        for ($i=0; $i <10 ; $i++) { 
            DB::table('products')->insert([
                'title' => $faker->name,
                'price' => rand(10,99990),
                'quantity' => rand(10,9999),
                'image' => "default.jpg",
            ]);
        }
    }
}
