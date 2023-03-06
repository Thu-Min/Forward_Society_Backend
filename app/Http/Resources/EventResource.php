<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'descriptionDetail' => $this->description_detail,
            'instructor' => $this->instructor,
            'thumbnail' => $this->thumbnail,
            'status' => $this->status,
            'startDate' => $this->start_date,
            'endDate' => $this->end_date,
            'startTime' => $this->start_time,
            'endTime' => $this->end_time,
        ];
    }
}
