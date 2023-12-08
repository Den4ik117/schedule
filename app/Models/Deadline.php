<?php

namespace App\Models;

use App\Traits\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deadline extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'description',
        'deadline',
    ];

    protected $casts = [
        'deadline' => 'immutable_date',
    ];
}
