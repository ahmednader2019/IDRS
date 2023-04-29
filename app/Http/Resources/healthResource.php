<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class healthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return
        [
            "id" => $this->id,
            "driver_id"=> $this->driver_id,
            "pressure" => $this->pressure,
            "diabetes" => $this->diabetes,
            "blood" => $this->blood,
            "diseases" => $this->diseases,
            "diseases_details" => $this->diseases_details,
            "surgeries" => $this->surgeries,
            "surgeries_details" =>  $this->surgeries_details ,
        ];
    }
}
