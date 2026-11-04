<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'partnership_id',
        'title',
        'slug',
        'description',
        'image',
        'program_type',
        'highlights',
        'link',
        'report_link',
        'video_link',
        'references',
        'reference_titles',
        'sdgs',
    ];

    public function partnership()
    {
        return $this->belongsTo(Partnership::class);
    }

    public function partnershipMaps()
    {
        return $this->hasMany(PartnershipMap::class);
    }

    protected $casts = [
        'references' => 'array',
        'reference_titles' => 'array',
        'sdgs' => 'array',
    ];

    public const SDGS = [
        1 => ['id' => 1, 'name' => 'No Poverty', 'icon' => 'SDG-1.svg', 'color' => '#E5243B'],
        2 => ['id' => 2, 'name' => 'Zero Hunger', 'icon' => 'SDG-2.svg', 'color' => '#DDA63A'],
        3 => ['id' => 3, 'name' => 'Good Health and Well-being', 'icon' => 'SDG-3.svg', 'color' => '#4C9F38'],
        4 => ['id' => 4, 'name' => 'Quality Education', 'icon' => 'SDG-4.svg', 'color' => '#C5192D'],
        5 => ['id' => 5, 'name' => 'Gender Equality', 'icon' => 'SDG-5.svg', 'color' => '#FF3A21'],
        6 => ['id' => 6, 'name' => 'Clean Water and Sanitation', 'icon' => 'SDG-6.svg', 'color' => '#26BDE2'],
        7 => ['id' => 7, 'name' => 'Affordable and Clean Energy', 'icon' => 'SDG-7.svg', 'color' => '#FCC30B'],
        8 => ['id' => 8, 'name' => 'Decent Work and Economic Growth', 'icon' => 'SDG-8.svg', 'color' => '#A21942'],
        9 => ['id' => 9, 'name' => 'Industry, Innovation and Infrastructure', 'icon' => 'SDG-9.svg', 'color' => '#FD6925'],
        10 => ['id' => 10, 'name' => 'Reduced Inequalities', 'icon' => 'SDG-10.svg', 'color' => '#DD1367'],
        11 => ['id' => 11, 'name' => 'Sustainable Cities and Communities', 'icon' => 'SDG-11.svg', 'color' => '#FD9D24'],
        12 => ['id' => 12, 'name' => 'Responsible Consumption and Production', 'icon' => 'SDG-12.svg', 'color' => '#BF8B2E'],
        13 => ['id' => 13, 'name' => 'Climate Action', 'icon' => 'SDG-13.svg', 'color' => '#3F7E44'],
        14 => ['id' => 14, 'name' => 'Life Below Water', 'icon' => 'SDG-14.svg', 'color' => '#0A97D9'],
        15 => ['id' => 15, 'name' => 'Life on Land', 'icon' => 'SDG-15.svg', 'color' => '#56C02B'],
        16 => ['id' => 16, 'name' => 'Peace, Justice and Strong Institutions', 'icon' => 'SDG-16.svg', 'color' => '#00689D'],
        17 => ['id' => 17, 'name' => 'Partnerships for the Goals', 'icon' => 'SDG-17.svg', 'color' => '#19486A'],
    ];

    public static function getAllSdgs(): array
    {
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('sdgs')) {
                $dbSdgs = Sdg::orderBy('order_number')->orderBy('id')->get();
                if ($dbSdgs->isNotEmpty()) {
                    return $dbSdgs->keyBy('id')->map(function ($item) {
                        return [
                            'id' => $item->id,
                            'order_number' => $item->order_number,
                            'name' => $item->name,
                            'icon' => $item->icon,
                            'icon_url' => $item->icon_url,
                            'color' => $item->color,
                            'description' => $item->description,
                        ];
                    })->toArray();
                }
            }
        } catch (\Throwable $e) {
            // fallback to constant below
        }

        return self::SDGS;
    }

    public function getSdgDetailsAttribute(): array
    {
        if (empty($this->sdgs) || !is_array($this->sdgs)) {
            return [];
        }

        $all = self::getAllSdgs();
        $result = [];
        foreach ($this->sdgs as $sdgId) {
            $id = (int) $sdgId;
            if (isset($all[$id])) {
                $item = $all[$id];
                if (empty($item['icon_url'])) {
                    $item['icon_url'] = asset('images/sgds/' . $item['icon']);
                }
                $result[] = $item;
            }
        }
        return $result;
    }

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
