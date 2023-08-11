<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(MealSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(IngredientMealSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(TagMealSeeder::class);
        $this->call(DescriptionSeeder::class);
        $this->call(DescriptionTranslationSeeder::class);
        $this->call(TranslationItSeeder::class);
        $this->call(TranslationDeSeeder::class);
        $this->call(TranslationHrSeeder::class);
        $this->call(LanguageSeeder::class);

    }
}
