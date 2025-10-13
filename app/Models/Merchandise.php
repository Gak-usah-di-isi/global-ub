<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Merchandise extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'merchandise';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'category',
        'image',
        'is_active',
        'shopee_link',
        'tokopedia_link',
        'order'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
        'order' => 'integer'
    ];

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return asset('images/placeholder.jpg');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
