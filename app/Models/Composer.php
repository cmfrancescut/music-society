<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Composer extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'date_of_death'
    ];

    protected $casts = [
        'date_of_birth' => 'datetime',
        'date_of_death' => 'datetime'
    ];

    public function scores(): HasMany
    {
        return $this->hasMany(Score::class);
    }
}
