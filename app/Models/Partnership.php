<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partnership extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'website',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = \Illuminate\Support\Str::slug($model->name);

                $count = 0;
                $originalSlug = $model->slug;
                while (static::where('slug', $model->slug)->exists()) {
                    $count++;
                    $model->slug = $originalSlug . '-' . $count;
                }
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('name') && empty($model->slug)) {
                $model->slug = \Illuminate\Support\Str::slug($model->name);

                $count = 0;
                $originalSlug = $model->slug;
                while (static::where('slug', $model->slug)->where('id', '!=', $model->id)->exists()) {
                    $count++;
                    $model->slug = $originalSlug . '-' . $count;
                }
            }
        });
    }
}
