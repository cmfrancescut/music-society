<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ensemble extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'ensemble_name',
        'ensemble_type_id',
        'ensemble_description',
        'rehearsal_id'
    ];

    public function ensembleType(): BelongsTo {
        return $this->belongsTo(EnsembleType::class);
    }

    public function rehearsals(): HasMany {
        return $this->hasMany(Rehearsal::class);
    }
}
