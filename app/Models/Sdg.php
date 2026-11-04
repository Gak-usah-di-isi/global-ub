<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Sdg extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_number',
        'name',
        'icon',
        'color',
        'description',
    ];

    protected $casts = [
        'order_number' => 'integer',
    ];

    /**
     * Get the formatted full URL for the SDG icon.
     */
    public function getIconUrlAttribute(): string
    {
        if (empty($this->icon)) {
            return asset('images/sgds/SDG-1.svg');
        }

        if (str_starts_with($this->icon, 'http://') || str_starts_with($this->icon, 'https://')) {
            return $this->icon;
        }

        if (str_starts_with($this->icon, 'images/') || str_starts_with($this->icon, 'icons/')) {
            return asset($this->icon);
        }

        if (Storage::disk('public')->exists($this->icon)) {
            return asset('storage/' . $this->icon);
        }

        $clean = ltrim($this->icon, '/');
        if (file_exists(public_path('images/sgds/' . $clean))) {
            return asset('images/sgds/' . $clean);
        }

        return asset('images/sgds/' . $clean);
    }

    /**
     * Get programs count that reference this SDG.
     */
    public function getProgramsCountAttribute(): int
    {
        return Program::whereJsonContains('sdgs', (int) $this->id)->count();
    }
}
