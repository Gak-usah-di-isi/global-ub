<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudyRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'description' => 'required|string|max:1000',
            'students_count' => 'required|string|max:100',
            'duration' => 'required|string|max:100',
            'highlights' => 'required|string|max:2000',
            'icon_class' => 'nullable|string|max:255',
            'icon_id' => 'nullable|exists:icons,id',
        ];

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
            'title.required' => 'Title is required.',
            'title.max' => 'Title cannot exceed 255 characters.',
            'tagline.max' => 'Tagline cannot exceed 255 characters.',
            'description.required' => 'Description is required.',
            'description.max' => 'Description cannot exceed 1000 characters.',
            'students_count.required' => 'Students count is required.',
            'students_count.max' => 'Students count cannot exceed 100 characters.',
            'duration.required' => 'Duration is required.',
            'duration.max' => 'Duration cannot exceed 100 characters.',
            'highlights.required' => 'Highlights are required.',
            'highlights.max' => 'Highlights cannot exceed 2000 characters.',
            'icon_class.max' => 'Icon class cannot exceed 255 characters.',
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
            'title' => 'study title',
            'tagline' => 'study tagline',
            'description' => 'study description',
            'students_count' => 'number of students',
            'duration' => 'study duration',
            'highlights' => 'study highlights',
            'icon_class' => 'icon class',
        ];
    }
}
