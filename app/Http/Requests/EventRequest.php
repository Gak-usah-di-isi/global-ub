<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'event_type' => 'required|string|max:100',
            'event_date' => 'required|date|after_or_equal:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'location' => 'required|string|max:255',
            'expected_attendees' => 'required|integer|min:1',
            'description' => 'required|string|max:2000',
            'status' => 'required|in:upcoming,ongoing,completed,cancelled',
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
            'title.required' => 'Event title is required.',
            'title.max' => 'Event title cannot exceed 255 characters.',
            'event_type.required' => 'Event type is required.',
            'event_type.max' => 'Event type cannot exceed 100 characters.',
            'event_date.required' => 'Event date is required.',
            'event_date.date' => 'Event date must be a valid date.',
            'event_date.after_or_equal' => 'Event date cannot be in the past.',
            'start_time.required' => 'Start time is required.',
            'start_time.date_format' => 'Start time must be in the format HH:MM.',
            'end_time.required' => 'End time is required.',
            'end_time.date_format' => 'End time must be in the format HH:MM.',
            'end_time.after' => 'End time must be after start time.',
            'location.required' => 'Location is required.',
            'location.max' => 'Location cannot exceed 255 characters.',
            'expected_attendees.required' => 'Expected attendees is required.',
            'expected_attendees.integer' => 'Expected attendees must be a number.',
            'expected_attendees.min' => 'Expected attendees must be at least 1.',
            'description.required' => 'Description is required.',
            'description.max' => 'Description cannot exceed 2000 characters.',
            'status.required' => 'Status is required.',
            'status.in' => 'Status must be one of the following: upcoming, completed, cancelled.',
            'image.required' => 'Event image is required.',
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
            'title' => 'event title',
            'event_type' => 'event type',
            'event_date' => 'event date',
            'start_time' => 'start time',
            'end_time' => 'end time',
            'location' => 'location',
            'expected_attendees' => 'expected number of attendees',
            'description' => 'description',
            'status' => 'status',
            'image' => 'event image',
        ];
    }
}
