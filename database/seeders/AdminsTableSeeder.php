<?php

// namespace Database\Seeders;

// use Illuminate\Database\Seeder;

// class AdminsTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         //
//     }
// }
namespace Database\Seeders;
use App\Models\Admin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Admin::create([
            'name'      =>  $faker->name,
            'email'     =>  'test@demo.com',
            'password'  =>  bcrypt('123456789'),
        ]);
    }
}