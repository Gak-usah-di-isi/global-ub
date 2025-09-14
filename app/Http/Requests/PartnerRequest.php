<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
            'description' => 'required|string',
            'students_count' => 'required|string|max:255',
            'program_duration' => 'required|string|max:255',
            'icon_class' => 'nullable|string|max:255',
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
            'description.required' => 'Description is required.',
            'students_count.required' => 'Students count is required.',
            'students_count.max' => 'Students count cannot exceed 255 characters.',
            'program_duration.required' => 'Program duration is required.',
            'program_duration.max' => 'Program duration cannot exceed 255 characters.',
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
            'title' => 'Title',
            'description' => 'Description',
            'students_count' => 'Students Count',
            'program_duration' => 'Program Duration',
            'icon_class' => 'Icon Class',
        ];
    }
}
