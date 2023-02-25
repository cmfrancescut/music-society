<?php

namespace App\Http\Resources;

use App\Models\Composer;
use App\Models\Difficulty;
use App\Models\EnsembleType;
use App\Models\MusicCheckout;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScoreResource extends JsonResource
{
    /**
     * Indicates if the resource's collection keys should be preserved.
     *
     * @var bool
     */
    public bool $preserveKeys = true;

    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'complete_score' => (bool)$this->complete_score,
            'composer' => new ComposerResource(Composer::findOrFail($this->composer_id)),
            'ensemble_type' => new EnsembleTypeResource(EnsembleType::findOrFail($this->ensemble_type_id)),
            'publisher' => new PublisherResource(Publisher::findOrFail($this->publisher_id)),
            'difficulty' => new DifficultyResource(Difficulty::findOrFail($this->difficulty_id)),
            'checked_out' => (bool)MusicCheckout::where(['score_id' => $this->id, 'checked_in' => null])->first(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
