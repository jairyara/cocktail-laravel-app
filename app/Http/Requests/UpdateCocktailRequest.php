<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateCocktailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|string",
            "category" => "required|string",
            "glass" => "required|string",
            "instructions" => "required|string",
            "image" => "required|string",
            "ingredient1" => "string|nullable",
            "ingredient2" => "string|nullable",
            "ingredient3" => "string|nullable",
            "ingredient4" => "string|nullable",
            "ingredient5" => "string|nullable",
            "ingredient6" => "string|nullable",
            "ingredient7" => "string|nullable",
            "ingredient8" => "string|nullable",
            "ingredient9" => "string|nullable",
            "ingredient10" => "string|nullable",
            "ingredient11" => "string|nullable",
            "ingredient12" => "string|nullable",
            "ingredient13" => "string|nullable",
            "ingredient14" => "string|nullable",
            "ingredient15" => "string|nullable",
            "measure1" => "string|nullable",
            "measure2" => "string|nullable",
            "measure3" => "string|nullable",
            "measure4" => "string|nullable",
            "measure5" => "string|nullable",
            "measure6" => "string|nullable",
            "measure7" => "string|nullable",
            "measure8" => "string|nullable",
            "measure9" => "string|nullable",
            "measure10" => "string|nullable",
            "measure11" => "string|nullable",
            "measure12" => "string|nullable",
            "measure13" => "string|nullable",
            "measure14" => "string|nullable",
            "measure15" => "string|nullable",
        ];
    }
}
