<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = \Illuminate\Support\Str::slug($model->title);

                $count = 0;
                $originalSlug = $model->slug;
                while (static::where('slug', $model->slug)->exists()) {
                    $count++;
                    $model->slug = $originalSlug . '-' . $count;
                }
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('title') && empty($model->slug)) {
                $model->slug = \Illuminate\Support\Str::slug($model->title);

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
