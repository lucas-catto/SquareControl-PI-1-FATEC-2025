<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\Teacher;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++) { 
            
            Room::create([
                'name' => $faker->unique()->company(),
                'description' => $faker->text(),
                'image' => 'https://placehold.co/300x300',
                'teacher_id' => Teacher::pluck('id')->random()
            ]);
        }
    }
}
