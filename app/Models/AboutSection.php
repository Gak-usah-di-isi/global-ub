<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    protected $fillable = [
        'students_count',
        'programs_count',
        'years_count',
        'partners_count',
        'video_url',
        'achievement_1_value',
        'achievement_1_label',
        'achievement_2_value',
        'achievement_2_label',
        'achievement_3_value',
        'achievement_3_label',
        'achievement_4_value',
        'achievement_4_label',
        'achievement_5_value',
        'achievement_5_label',
    ];
}
