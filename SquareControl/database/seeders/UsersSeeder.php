<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++) { 
            
            $user = User::create([
                'name' => $faker->userName(),
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make('password')
            ]);

            Teacher::create([
                'user_id' => $user->id,
                'school_id' => School::pluck('id')->random()
            ]);
        }

        for ($i=0; $i < 60; $i++) { 
            
            $user = User::create([
                'name' => $faker->userName(),
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make('password')
            ]);

            Student::create([
                'user_id' => $user->id,
                'school_id' => School::pluck('id')->random()
            ]);
        }
    }
}
