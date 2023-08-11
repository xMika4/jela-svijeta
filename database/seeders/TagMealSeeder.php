<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Meal;
use App\Models\TagMeal;
use Illuminate\Database\Seeder;

class TagMealSeeder extends Seeder
{
    public function run(): void
    {   
        $tagIDs = Tag::pluck('id')->toArray();
        
        foreach(Meal::all() as $meal){
            $numTags = rand(1, 3); 
            $selectedTagKeys = array_rand($tagIDs, $numTags);
            
            if(!is_array($selectedTagKeys)){
                $selectedTagKeys = [$selectedTagKeys]; 
            }
            
            foreach($selectedTagKeys as $tagIndex){
                TagMeal::create(
                    [
                        'tag_id' => $tagIDs[$tagIndex],
                        'meal_id'       => $meal->id,
                    ]
                );
            }
        }
    }
}
