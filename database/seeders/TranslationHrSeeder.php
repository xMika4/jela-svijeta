<?php

namespace Database\Seeders;

use App\Models\Meal;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Tag;
use App\Models\MealTranslation;
use App\Models\CategoryTranslation;
use App\Models\IngredientTranslation;
use App\Models\TagTranslation;
use Illuminate\Database\Seeder;
use FakerRestaurant\Provider\hr_HR\Restaurant;

class TranslationHrSeeder extends Seeder
{
    public function run(): void
    {
        $this->meals();
        $this->categories();
        $this->ingredients();
        $this->tags();
    }


    private function meals(){
        //meals
        $mealFaker = \Faker\Factory::create();
        $mealFaker->addProvider(new Restaurant($mealFaker));
        foreach (Meal::all() as $index) {
            static $n = 1;
            MealTranslation::insert(
                [
                    'title' => $mealFaker->foodName(),
                    'meal_id' => $n++,
                    'locale' => 'hr'
                ]
            ); 
        }
    }
    private function categories(){
        //categories
        $categoryFaker = \Faker\Factory::create();
        $categoryFaker->addProvider(new Restaurant($categoryFaker));
        foreach (Category::all() as $index) {
            static $n1 = 1;
            CategoryTranslation::insert(
                [
                    'title' => $categoryFaker->sauceName(),
                    'category_id' => $n1++,
                    'locale' => 'hr'
                ]
            );
        }
    }

    private function ingredients(){
        //ingredients
        $ingredientFaker = \Faker\Factory::create();
        $ingredientFaker->addProvider(new Restaurant($ingredientFaker));
        foreach (Ingredient::all() as $index) {
            static $n2 = 1;
            IngredientTranslation::insert(
                [
                    'title' => $ingredientFaker->dairyName(),
                    'ingredient_id' => $n2++,
                    'locale' => 'hr'
                ]
            );
        }
    }

    private function tags(){
        //tags
        $tagFaker = \Faker\Factory::create();
        $tagFaker->addProvider(new Restaurant($tagFaker));
        foreach (Tag::all() as $index) {
            static $n3 = 1;
            TagTranslation::insert(
                [
                    'title' => $tagFaker->dairyName(),
                    'tag_id' => $n3++,
                    'locale' => 'hr'
                ]
            );
        }
    }

}
