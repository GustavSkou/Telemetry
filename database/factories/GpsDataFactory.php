<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GpsData>
 */
class GpsDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // will create a new Activity, if it is not overwritten in the seeder
            'activity_id' => Activity::factory(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'elevation' => $this->faker->numberBetween(0, 200),
            'timestamp' => $this->faker->dateTime('now')
        ];
    }
}
