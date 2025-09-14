<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InnovationRequest extends FormRequest
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
            'description' => 'required|string|max:2000',
            'innovation_type' => 'required|string|max:255',
            'innovation_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'location' => 'required|string|max:255',
            'expected_attendees' => 'required|integer|min:1',
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
            'title.required' => 'Innovation title is required.',
            'title.max' => 'Innovation title cannot exceed 255 characters.',
            'description.required' => 'Description is required.',
            'description.max' => 'Description cannot exceed 2000 characters.',
            'innovation_type.required' => 'Innovation type is required.',
            'innovation_type.max' => 'Innovation type cannot exceed 255 characters.',
            'innovation_date.required' => 'Innovation date is required.',
            'innovation_date.date' => 'Innovation date must be a valid date.',
            'start_time.required' => 'Start time is required.',
            'start_time.date_format' => 'Start time must be in the format HH:MM.',
            'end_time.required' => 'End time is required.',
            'end_time.date_format' => 'End time must be in the format HH:MM.',
            'end_time.after' => 'End time must be after start time.',
            'location.required' => 'Location is required.',
            'location.max' => 'Location cannot exceed 255 characters.',
            'expected_attendees.required' => 'Expected number of attendees is required.',
            'expected_attendees.integer' => 'Expected attendees must be a number.',
            'expected_attendees.min' => 'Expected attendees must be at least 1.',
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
            'title' => 'innovation title',
            'description' => 'description',
            'innovation_type' => 'innovation type',
            'innovation_date' => 'innovation date',
            'start_time' => 'start time',
            'end_time' => 'end time',
            'location' => 'location',
            'expected_attendees' => 'expected attendees',
            'image' => 'image',
        ];
    }
}
