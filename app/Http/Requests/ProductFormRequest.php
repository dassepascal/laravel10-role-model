<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'image' => 'image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'title' => 'required|string|max:250',
            'description' => 'required|string',
            'surface' => 'required|integer',
            'rooms' => 'required|integer',
            'bedrooms' => 'required|integer',
            'floor' => 'required|integer',
            'price' => 'required|integer',
            'address' => 'required|string|max:250',
            'city' => 'required|string|max:250',
            'postal_code' => 'required|string|max:250',
            'sold' => 'required|boolean',
            'options' => ['array','exists:options,id','required'],
            'dpe' => 'nullable|integer',
            'ges' => 'nullable|integer',
                ];
    }
}
