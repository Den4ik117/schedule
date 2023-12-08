<?php

namespace App\Models;

use App\Traits\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedule extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
    ];

    public function deadlines(): HasMany
    {
        return $this->hasMany(Deadline::class);
    }
}
