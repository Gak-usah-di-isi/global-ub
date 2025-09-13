<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonal extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'photo',
        'position',
        'organization',
        'testimonial_type',
        'testimonial',
        'location',
        'partnership_since',
        'key_achievements',
    ];
}
