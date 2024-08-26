<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "description" => "string",
            'price' => 'required|numeric|min:0',
            "quantity"=>"numeric|min:1",
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}
