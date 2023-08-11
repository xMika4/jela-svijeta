<?php

namespace App\Http\Controllers\Api\V1;

use Carbon\Carbon;
use App\Models\Meal;
use App\Models\Language;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\MealRequest;
use App\Http\Resources\V1\MealsResource;

class MealController extends Controller
{
    public function index(MealRequest $request)
    {
        $meals = Meal::query();

        //categories
        $categoryId = $request->get('category');
        if($categoryId == "null"){
            $meals->whereNull('category_id');

        } elseif($categoryId == "!null"){
            $meals->whereNotNull('category_id');

        } elseif($categoryId){
            $meals->where('category_id', $categoryId);
        }
        //ingredients
        $ingredientID = $request->get('ingredients');
        if($ingredientID){
            $ingredients = explode(',', $ingredientID);
            $meals->whereHas(
                'ingredients',
                function ($meals) use ($ingredients) {
                    $meals->whereIn('ingredient_id', $ingredients);

                },
                '>=',
                count($ingredients)
            );
        }
        //tags
        $tagId = $request->get('tags');
        if($tagId){
            $tags = explode(',', $tagId);
            $meals->whereHas(
                'tags',
                function ($meals) use ($tags) {
                    $meals->whereIn('tag_id', $tags);

                },
                '>=',
                count($tags)
            );
        }
        //with
        $with = $request->get('with');
        if($with){
            $withName = explode(',', $with);
            $meals->with($withName);
        }
        //diff time
        $diffTime = $request->get('diff_time');
        if ($diffTime) {
            $timestamp = intval($request->input('diff_time'));

            $meals->where(function ($query) use ($timestamp) {
                $query->orWhere('created_at', '>', Carbon::createFromTimestamp($timestamp))
                    ->orWhere('updated_at', '>', Carbon::createFromTimestamp($timestamp))
                    ->orWhere('deleted_at', '>', Carbon::createFromTimestamp($timestamp));
            })->withTrashed(); 
        }
        
        //per page
        $perPage = (int)$request->get('per_page');
        if($perPage){
            return MealsResource::collection($meals->paginate($perPage)->withPath(url()->full()));
        } else{
            return MealsResource::collection($meals->get());
        }
        
    }
    public function languages() {
        return response()->json([
            'data' => Language::select('id', 'code', 'language')->get()
        ]);
    }
    
}