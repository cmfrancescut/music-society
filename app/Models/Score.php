<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Score extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'complete_score',
        'composer_id',
        'ensemble_type_id',
        'publisher_id'
    ];

    public function composer(): belongsTo {
        return $this->belongsTo(Composer::class);
    }

    public function ensembleType(): HasOne {
        return $this->hasOne(EnsembleType::class);
    }

    public function publisher(): HasOne {
        return $this->hasOne(Publisher::class);
    }

    public function instrumentScores(): BelongsToMany {
        return $this->belongsToMany(InstrumentScore::class);
    }

    public function musicCheckouts(): BelongsToMany {
        return $this->belongsToMany(MusicCheckout::class);
    }
}
