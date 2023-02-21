<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class InstrumentScore extends Pivot
{
    use SoftDeletes;

    protected $fillable = [
        'instrument_id',
        'score_id',
        'filename'
    ];

    public function instruments(): HasMany {
        return $this->hasMany(Instrument::class);
    }

    public function scores(): HasOne {
        return $this->hasOne(Score::class);
    }
}
