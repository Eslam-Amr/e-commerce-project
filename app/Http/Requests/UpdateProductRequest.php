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
            'price' => 'required|min:0|numeric',
            'image' => 'mimes:png,jpg',
            'discount' => 'required|min:0|max:100|numeric',
            'stock' => 'required|numeric|min:0',
            'color' => 'required',
            'name' => 'required|min:3|max:25',
            'size' => 'nullable',
            'description' => 'required',
            'additonal_information' => 'required',
            // 'seller_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',

        ];
    }
}
