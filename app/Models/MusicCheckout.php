<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MusicCheckout extends Model
{
    use HasFactory;

    public function scores(): HasMany {
        return $this->hasMany(Score::class);
    }
}
