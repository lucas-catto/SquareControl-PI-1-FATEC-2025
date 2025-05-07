<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schools = [
            ['name' => 'FATEC Prefeito Octavio Celso Pacheco de Almeida Prado'],
            ['name' => 'ETEC Comendador João Rays']
        ];

        foreach ($schools as $school) {

            School::create([
                'name' => $school['name']
            ]);
        }
    }
}
