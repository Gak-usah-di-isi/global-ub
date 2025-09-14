<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'organization' => 'required|string|max:255',
            'testimonial_type' => 'required|string|max:255',
            'testimonial' => 'required|string',
            'location' => 'required|string|max:255',
            'partnership_since' => 'required|string|max:255',
            'key_achievements' => 'required|string',
        ];

        if ($this->isMethod('post')) {
            $rules['slug'] = 'required|string|max:255|unique:testimonials,slug';
            $rules['photo'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }
        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['slug'] = 'required|string|max:255|unique:testimonials,slug,' . $this->testimonial->id;
            $rules['photo'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
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
            'name.required' => 'Name is required.',
            'name.max' => 'Name cannot exceed 255 characters.',
            'slug.required' => 'Slug is required.',
            'slug.max' => 'Slug cannot exceed 255 characters.',
            'slug.unique' => 'Slug must be unique.',
            'photo.image' => 'Photo must be an image.',
            'photo.mimes' => 'Photo must be a file of type: jpeg, png, jpg, gif, svg.',
            'photo.max' => 'Photo cannot exceed 2048 kilobytes.',
            'position.max' => 'Position cannot exceed 255 characters.',
            'organization.required' => 'Organization is required.',
            'organization.max' => 'Organization cannot exceed 255 characters.',
            'testimonial_type.required' => 'Testimonial type is required.',
            'testimonial_type.max' => 'Testimonial type cannot exceed 255 characters.',
            'testimonial.required' => 'Testimonial is required.',
            'location.required' => 'Location is required.',
            'location.max' => 'Location cannot exceed 255 characters.',
            'partnership_since.required' => 'Partnership since is required.',
            'partnership_since.max' => 'Partnership since cannot exceed 255 characters.',
            'key_achievements.required' => 'Key achievements are required.',
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
            'name' => 'name',
            'slug' => 'slug',
            'photo' => 'photo',
            'position' => 'position',
            'organization' => 'organization',
            'testimonial_type' => 'testimonial type',
            'testimonial' => 'testimonial',
            'location' => 'location',
            'partnership_since' => 'partnership since',
            'key_achievements' => 'key achievements',
        ];
    }
}
