<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class DownloadCenter extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'file',
        'icon_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title);

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
                $model->slug = Str::slug($model->title);

                $count = 0;
                $originalSlug = $model->slug;
                while (static::where('slug', $model->slug)->where('id', '!=', $model->id)->exists()) {
                    $count++;
                    $model->slug = $originalSlug . '-' . $count;
                }
            }
        });
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class, 'icon_id');
    }
}
