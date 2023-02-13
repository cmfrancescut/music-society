<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RehearsalResource extends JsonResource
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
            'location_name' => $this->location_name,
            'location_street_address' => $this->location_street_address,
            'location_city' => $this->location_city,
            'location_province' => $this->location_province,
            'location_country' => $this->location_country,
            'location_postal_code' => $this->location_postal_code,
            'rehearsal_day' => $this->rehearsal_day,
            'rehearsal_time' => $this->rehearsal_time,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
