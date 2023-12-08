<?php

namespace App\Http\Resources;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Schedule resource
 */
class ScheduleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'uuid' => $this->resource->uuid,
            'name' => $this->resource->name,
            'deadlines' => DeadlineResource::collection($this->whenLoaded('deadlines')),
            'updated_at' => $this->resource->updated_at,
            'created_at' => $this->resource->created_at,
        ];
    }
}
