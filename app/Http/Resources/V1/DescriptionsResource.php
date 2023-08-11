<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DescriptionsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            $this->translate($request->get('lang'))->description ?? 'Translation missing',

        ];    
    }
    
}
