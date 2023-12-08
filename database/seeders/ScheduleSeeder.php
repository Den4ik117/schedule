<?php

namespace Database\Seeders;

use App\Models\Deadline;
use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::factory()
            ->has(Deadline::factory()->count(10), 'deadlines')
            ->create([
                'name' => 'Расписание дедлайнов',
            ]);
    }
}
