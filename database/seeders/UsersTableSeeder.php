<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('12345678');

        User::create([
            'name' => 'user',
            'email' => 'user@mail',
            'password' => $password,
        ]);

        for ($i = 0; $i < 3; $i++) { 
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
