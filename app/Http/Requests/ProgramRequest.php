<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'program_type' => 'required|string|max:255',
            'highlights' => 'nullable|string',
            'link' => 'nullable|url|max:500',
        ];

        if ($this->isMethod('post')) {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:5120';
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['image'] = 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120';
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
            'title.required' => 'Program title is required.',
            'title.max' => 'Program title cannot exceed 255 characters.',
            'description.required' => 'Description is required.',
            'description.max' => 'Description cannot exceed 2000 characters.',
            'program_type.required' => 'Program type is required.',
            'program_type.max' => 'Program type cannot exceed 255 characters.',
            'highlights.string' => 'Highlights must be a string.',
            'link.url' => 'Link must be a valid URL.',
            'link.max' => 'Link cannot exceed 500 characters.',
            'image.required' => 'Image upload is required.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif.',
            'image.max' => 'Image size cannot exceed 5MB.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'title' => 'program title',
            'description' => 'description',
            'program_type' => 'program type',
            'highlights' => 'highlights',
            'link' => 'program link',
            'image' => 'image',
        ];
    }
}
