<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'name' => 'required|string|max:25',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', // Validate image file types
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp', // Validate image file types
        ];
    }
}