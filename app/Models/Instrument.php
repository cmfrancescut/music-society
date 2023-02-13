<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Instrument extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'instrument_name',
        'instrument_chair'
    ];

    public function instrumentScores(): BelongsToMany {
        return $this->belongsToMany(InstrumentScore::class);
    }
}
