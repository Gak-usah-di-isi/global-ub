<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'description' => 'nullable|string|max:1000',
            'category_gallery' => 'required|string|max:255',
        ];

        if ($this->isMethod('post')) {
            $rules['images'] = 'required|array|min:1';
            $rules['images.*'] = 'image|mimes:jpeg,jpg,png,gif,webp|max:5120';
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['images'] = 'nullable|array';
            $rules['images.*'] = 'image|mimes:jpeg,jpg,png,gif,webp|max:5120';
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
            'title.required' => 'Gallery title is required.',
            'title.max' => 'Gallery title cannot exceed 255 characters.',
            'description.max' => 'Description cannot exceed 1000 characters.',
            'category_gallery.required' => 'Gallery category is required.',
            'category_gallery.max' => 'Gallery category cannot exceed 255 characters.',
            'images.required' => 'At least one image is required.',
            'images.*.image' => 'Each file must be an image.',
            'images.*.mimes' => 'Images must be of type: jpeg, jpg, png, gif, webp.',
            'images.*.max' => 'Each image cannot exceed 5MB.',
        ];
    }
}
