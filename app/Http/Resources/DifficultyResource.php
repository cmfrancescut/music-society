<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DifficultyResource extends JsonResource
{
    public bool $preserveKeys = true;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'difficulty_description' => $this->difficulty_description
        ];
    }
}
