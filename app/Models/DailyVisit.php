<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyVisit extends Model
{
    protected $fillable = [
        'date',
        'total_visits',
        'unique_visitors',
    ];

    protected $casts = [
        'date' => 'date',
        'total_visits' => 'integer',
        'unique_visitors' => 'integer',
    ];
}
