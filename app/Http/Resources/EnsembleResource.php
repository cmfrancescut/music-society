<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EnsembleResource extends JsonResource
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
            'ensemble_type_id' => EnsembleTypeResource::collection($this->ensemble_type_id),
            'ensemble_description' => $this->ensemble_description,
            'rehearsal' => RehearsalResource::collection($this->rehearsal_id),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
