<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class driverResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'gender' => $this->gender,
            'phone_number' => $this->phone_number,
            'city' => $this->city,
            'address' => $this->address,
            'date_of_birth' => $this->date_of_birth,
            'nationality' => $this->nationality,
            'password' => $this->password,
            'national_id' => $this->national_id,
            'emergency_number' => $this->emergency_number,
        ];
    }
}
