<?php

namespace App\Http\Controllers;

use App\Http\Resources\ScheduleResource;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function show(Schedule $schedule): ScheduleResource
    {
        $schedule->load(['deadlines']);

        return new ScheduleResource($schedule);
    }
}
