<?php

namespace Database\Factories;

use FakerRestaurant\Provider\en_US\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Restaurant($faker));
        static $n = 1;
        return [
            'title' => $faker->dairyName(),
            'slug'  => 'category-' . $n++,
        ];
    }
    
}
