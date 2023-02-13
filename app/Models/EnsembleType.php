<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnsembleType extends Model
{
    use SoftDeletes;

    protected $fillable = ['ensemble_type'];

    public function scores(): BelongsToMany {
        return $this->belongsToMany(Score::class);
    }
}
