<?php

namespace App\Http\Requests\V1;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class MealRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'lang'      => 'required|min:2|max:2',
            'per_page'  => 'sometimes|integer|min:1',
            'page'      => 'sometimes|integer|min:1',
            'diff_time' => 'sometimes|integer|min:0',
        ];
        
    }
    protected function failedValidation(Validator $validator)
    {
        $responseData = [
            'message' => $validator->errors(),
            'available_languages' => Language::select('id', 'code', 'language')->get(),
        ];
        throw new HttpResponseException(
            response()->json($responseData, 422)
        );
          
    }
}
