<?php

namespace Database\Seeders;

use App\Models\Meal;
use App\Models\Ingredient;
use App\Models\IngredientMeal;
use Illuminate\Database\Seeder;

class IngredientMealSeeder extends Seeder
{
    public function run(): void
    {   
        $ingredientIDs = Ingredient::pluck('id')->toArray();
        
        foreach(Meal::all() as $meal){
            $numIngredients = rand(1, 4); 
            $selectedIngredientKeys = array_rand($ingredientIDs, $numIngredients);
            
            if(!is_array($selectedIngredientKeys)){
                $selectedIngredientKeys = [$selectedIngredientKeys]; 
            }
            
            foreach ($selectedIngredientKeys as $ingredientIndex){
                IngredientMeal::create(
                    [
                        'ingredient_id' => $ingredientIDs[$ingredientIndex],
                        'meal_id'       => $meal->id,
                    ]
                );
            }
        }
    }
}
