<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnnouncementRequest extends FormRequest
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
            //
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:100',
            'content' => 'required|string',
            'company_id' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp', // Validate image file types
        ];
    }
}
