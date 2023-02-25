<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Difficulty extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'difficulty';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'difficulty_description'
    ];

    public $timestamps = false;

    public function scores(): HasMany {
        return $this->hasMany(Score::class);
    }
}
