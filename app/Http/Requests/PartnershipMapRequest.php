<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnershipMapRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'partnership_id' => 'required|exists:partnerships,id',
            'program_id' => 'nullable|exists:programs,id',
            'destination_name' => 'required|string|max:255',
            'country_name' => 'required|string|max:255',
            'city_name' => 'nullable|string|max:255',
            'origin_name' => 'nullable|string|max:255',
            'origin_latitude' => 'nullable|numeric|between:-90,90',
            'origin_longitude' => 'nullable|numeric|between:-180,180',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
            'status' => 'required|in:Partner,Highlighted,Strategic',
            'role' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'partnership_id.required' => 'Pilih mitra kerjasama (partnership).',
            'partnership_id.exists' => 'Mitra yang dipilih tidak valid.',
            'destination_name.required' => 'Nama lokasi/tujuan kerjasama wajib diisi.',
            'country_name.required' => 'Nama negara wajib diisi.',
            'latitude.required' => 'Titik Latitude lokasi tujuan wajib diisi.',
            'latitude.numeric' => 'Latitude harus berupa angka koordinat yang valid.',
            'longitude.required' => 'Titik Longitude lokasi tujuan wajib diisi.',
            'longitude.numeric' => 'Longitude harus berupa angka koordinat yang valid.',
            'status.required' => 'Pilih status marker kerjasama.',
        ];
    }
}
