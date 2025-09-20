<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoryRequest extends FormRequest
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
            'category_story' => 'required|string|max:255',
            'video_url' => 'nullable|url',
        ];

        if ($this->isMethod('post')) {
            $rules['slug'] = 'required|string|max:255|unique:stories,slug';
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $storyId = $this->route('story')->id ?? null;
            $rules['slug'] = 'required|string|max:255|unique:stories,slug,' . $storyId;
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
            'description.required' => 'Description is required.',
            'category_story.required' => 'Category is required.',
            'category_story.max' => 'Category cannot exceed 255 characters.',
            'thumbnail.image' => 'Thumbnail must be an image file.',
            'video_url.url' => 'Video URL must be a valid URL.'
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
            'title' => 'story title',
            'description' => 'story description',
            'category_story' => 'story category',
            'thumbnail' => 'story thumbnail',
            'video_url' => 'video URL',
        ];
    }
}
