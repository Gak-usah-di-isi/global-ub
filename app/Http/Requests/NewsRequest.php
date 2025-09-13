<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'content' => 'required|string',
        ];

        if ($this->isMethod('post')) {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120';
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['image'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120';
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
            'title.required' => 'Title is required.',
            'title.max' => 'Title cannot exceed 255 characters.',
            'content.required' => 'Content is required.',
            'image.required' => 'Image upload is required.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Image size cannot exceed 5 MB.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */    public function attributes(): array
    {
        return [
            'title' => 'news title',
            'content' => 'news content',
            'image' => 'news image',
        ];
    }
}
