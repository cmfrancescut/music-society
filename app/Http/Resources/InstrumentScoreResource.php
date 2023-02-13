<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstrumentScoreResource extends JsonResource
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
            'score_id' => ScoreResource::collection($this->score_id),
            'instrument_id' => InstrumentResource::collection($this->instrument_id),
            'filename' => $this->filename,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
