<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $fillable = [
        'icon_id',
        'title',
        'subtitle',
        'description',
        'year',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function icon()
    {
        return $this->belongsTo(Icon::class, 'icon_id');
    }
}
