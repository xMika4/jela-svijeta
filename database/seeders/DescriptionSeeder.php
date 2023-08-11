<?php

namespace Database\Seeders;

use App\Models\Meal;
use App\Models\Description;
use Illuminate\Database\Seeder;

class DescriptionSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        foreach(Meal::all() as $index){
            Description::insert(
                [
                    'description' => $faker->paragraph(2),
                ]
            );
        }
    }
}
