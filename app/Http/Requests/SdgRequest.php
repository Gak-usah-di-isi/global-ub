<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SdgRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'order_number' => 'required|integer|min:1',
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:50',
            'description' => 'nullable|string',
            'preset_icon' => 'nullable|string',
        ];

        if ($this->isMethod('post')) {
            // Require either uploaded icon file or selected preset icon
            $rules['icon_file'] = 'nullable|file|mimes:svg,png,jpg,jpeg|max:2048';
            if (!$this->filled('preset_icon')) {
                $rules['icon_file'] = 'required_without:preset_icon|file|mimes:svg,png,jpg,jpeg|max:2048';
            }
        } else {
            $rules['icon_file'] = 'nullable|file|mimes:svg,png,jpg,jpeg|max:2048';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'order_number.required' => 'Nomor urut SDG wajib diisi.',
            'order_number.integer' => 'Nomor urut harus berupa angka.',
            'name.required' => 'Nama SDG wajib diisi.',
            'color.required' => 'Warna SDG wajib dipilih.',
            'icon_file.required_without' => 'Silakan upload icon SDG atau pilih salah satu preset icon.',
            'icon_file.mimes' => 'Icon harus berformat SVG, PNG, JPG, atau JPEG.',
            'icon_file.max' => 'Ukuran icon maksimal 2MB.',
        ];
    }
}
