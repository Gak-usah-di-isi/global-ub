<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RankingRequest extends FormRequest
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
            'icon_id' => 'required|exists:icons,id',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|string|max:4',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'icon_id.required' => 'The icon field is required.',
            'icon_id.exists' => 'The selected icon is invalid.',
            'title.required' => 'The title field is required.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'subtitle.required' => 'The subtitle field is required.',
            'subtitle.max' => 'The subtitle may not be greater than 255 characters.',
            'description.required' => 'The description field is required.',
            'year.required' => 'The year field is required.',
            'year.max' => 'The year may not be greater than 4 characters.',
            'order.integer' => 'The order must be an integer.',
            'order.min' => 'The order must be at least 0.',
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
            'icon_id' => 'icon',
            'title' => 'title',
            'subtitle' => 'subtitle',
            'description' => 'description',
            'year' => 'year',
            'order' => 'order',
            'is_active' => 'active status',
        ];
    }
}
