<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rehearsal extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_name',
        'location_street_address',
        'location_city',
        'location_province',
        'location_country',
        'location_postal_code',
        'rehearsal_day',
        'rehearsal_time'
    ];

    public function ensemble(): BelongsTo {
        return $this->belongsTo(Ensemble::class);
    }
}
