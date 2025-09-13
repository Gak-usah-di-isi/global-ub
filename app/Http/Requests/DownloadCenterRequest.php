<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DownloadCenterRequest extends FormRequest
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
            'description' => 'required|string|max:1000',
        ];

        if ($this->isMethod('post')) {
            $rules['file'] = 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240';
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['file'] = 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240';
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
            'title.required' => 'File title is required.',
            'title.max' => 'File title cannot exceed 255 characters.',
            'description.required' => 'Description is required.',
            'description.max' => 'Description cannot exceed 1000 characters.',
            'file.required' => 'File upload is required.',
            'file.file' => 'The uploaded file is not valid.',
            'file.mimes' => 'File must be a PDF, DOC, DOCX, XLS, XLSX, PPT, or PPTX.',
            'file.max' => 'File size cannot exceed 10MB.',
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
            'title' => 'file title',
            'description' => 'description',
            'file' => 'file',
        ];
    }
}
