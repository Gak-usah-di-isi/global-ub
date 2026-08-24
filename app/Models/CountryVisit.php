<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryVisit extends Model
{
    protected $fillable = [
        'country_code',
        'country_name',
        'total_visits',
        'unique_visitors',
        'last_visited_at',
    ];

    protected $casts = [
        'last_visited_at' => 'datetime',
    ];

    protected $appends = [
        'flag_emoji',
    ];

    public function getFlagEmojiAttribute(): string
    {
        $code = strtoupper($this->country_code ?? '');

        if (strlen($code) !== 2 || $code === 'XX') {
            return '🌐';
        }

        return implode('', array_map(fn ($char) => mb_chr(127397 + ord($char)), str_split($code)));
    }
}
