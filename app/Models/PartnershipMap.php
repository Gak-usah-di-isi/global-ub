<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartnershipMap extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'partnership_id',
        'program_id',
        'destination_name',
        'country_name',
        'city_name',
        'origin_name',
        'origin_latitude',
        'origin_longitude',
        'latitude',
        'longitude',
        'status',
        'role',
        'notes',
    ];

    protected $casts = [
        'origin_latitude' => 'float',
        'origin_longitude' => 'float',
        'latitude' => 'float',
        'longitude' => 'float',
    ];

    public function partnership()
    {
        return $this->belongsTo(Partnership::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    /**
     * Resolves the linked program: explicitly set program or the first program belonging to this partnership.
     */
    public function getEffectiveProgramAttribute(): ?Program
    {
        if ($this->program) {
            return $this->program;
        }

        if ($this->relationLoaded('partnership') && $this->partnership) {
            if ($this->partnership->relationLoaded('programs')) {
                return $this->partnership->programs->first();
            }
            return $this->partnership->programs()->first();
        }

        return null;
    }
}
