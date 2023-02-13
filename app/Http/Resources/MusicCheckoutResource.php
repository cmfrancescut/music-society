<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MusicCheckoutResource extends JsonResource
{
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
            'score' => ScoreResource::collection($this->score_id),
            'user_id' => $this->user_id,
            'ensemble' => EnsembleResource::collection($this->ensemble_id),
            'checked_out' => $this->checked_out,
            'checked_in' => $this->checked_in,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
