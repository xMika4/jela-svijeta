<?php

namespace Database\Factories;

use FakerRestaurant\Provider\en_US\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class MealFactory extends Factory
{
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Restaurant($faker));
        return [
            'title' => $faker->foodName(),
            'category_id' => rand(1, 10) <= 8 ? rand(1, 10) : null,
        ];
    }
}
