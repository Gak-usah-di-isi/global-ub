<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnershipRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|max:255',
            'website' => 'nullable|url|max:255',
        ];

        if ($this->isMethod('post')) {
            $rules['logo'] = 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:5120';
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['logo'] = 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:5120';
        }

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Partnership name is required.',
            'name.max' => 'Partnership name cannot exceed 255 characters.',
            'website.url' => 'Website must be a valid URL.',
            'website.max' => 'Website URL cannot exceed 255 characters.',
            'logo.image' => 'Logo must be an image.',
            'logo.mimes' => 'Logo must be of type: jpeg, jpg, png, gif, webp.',
            'logo.max' => 'Logo cannot exceed 5MB.',
        ];
    }
}
