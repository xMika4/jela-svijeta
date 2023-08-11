<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use App\Http\Resources\V1\TagsResource;
use App\Http\Resources\V1\CategoriesResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MealsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $status = 'created';

        if ($this->deleted_at) {
            $status = 'deleted';
        } elseif ($this->updated_at > $this->created_at) {
            $status = 'modified';
        }
        
        return [
            'id' => $this->id,
            'title' => $this->translate($request->get('lang'))->title ?? 'Translation missing',
            'description' => new DescriptionsResource($this->description),
            'category' => new CategoriesResource($this->whenLoaded('category')),
            'ingredients' => IngredientsResource::collection($this->whenLoaded('ingredients')),
            'tags' => TagsResource::collection($this->whenLoaded('tags')),
            'status' => $status

        ];
    }

}
