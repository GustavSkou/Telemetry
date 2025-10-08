<?php

namespace Database\Factories;

use App\Models\RouteType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\route>
 */
class RouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $age = 25;
        $weight = 85;

        $durationMinutes = fake()->numberBetween(0, 300); // inclusive
        $avgHr = fake()->numberBetween(75, 200);
        $cal = (int) ($durationMinutes * (0.6309 * $avgHr + 0.1988 * $weight + 0.2017 * $age - 55.0969) / 4.184);

        $route_types = RouteType::pluck('id')->toArray();

        return [
            'name' => 'Some Route',
            'created_by' => fake()->name(),
            'date' => fake()->dateTimeThisYear(),
            'duration' => $durationMinutes,
            'avgHr' => $avgHr,
            'cal' => $cal,
            'route_type_id' => fake()->randomElement($route_types),
        ];
    }
}
