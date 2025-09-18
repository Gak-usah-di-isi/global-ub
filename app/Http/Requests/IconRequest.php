<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IconRequest extends FormRequest
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
        ];

        if ($this->isMethod('post')) {
            $rules['icon'] = 'required|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }
        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['icon'] = 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048';
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
            'name.required' => 'Icon name is required.',
            'name.max' => 'Icon name cannot exceed 255 characters.',
            'icon.mimes' => 'Icon must be of type: jpeg, png, jpg, gif, svg.',
            'icon.max' => 'Icon image cannot exceed 2MB.',
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
            'name' => 'Icon Name',
        ];
    }
}
