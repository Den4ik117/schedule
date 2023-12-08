<?php

namespace App\Http\Resources;

use App\Models\Deadline;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Deadline $resource
 */
class DeadlineResource extends JsonResource
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
            'description' => $this->resource->description,
            'deadline' => $this->resource->deadline,
            'day' => $this->resource->deadline->day,
            'month' => $this->resource->deadline->month,
            'year' => $this->resource->deadline->year,
            'updated_at' => $this->resource->updated_at,
            'created_at' => $this->resource->created_at,
        ];
    }
}
