<?php

namespace Database\Seeders;

use App\Models\GpsData;
use App\Models\Activity;
use Illuminate\Database\Seeder;

class GpsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amount_of_activities = 25;
        // grab all routes created by RouteSeeder
        Activity::chunk($amount_of_activities, function ($activities) {
            $amount = 25;
            foreach ($activities as $activity) {
                GpsData::factory()->count($amount)->create([
                    'activity_id' => $activity->id,
                ]);
            }
        });
    }
}
