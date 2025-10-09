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
        $route_type = fake()->randomElement($route_types);

        $distance = null;

        switch ($route_type) {
            // running
            case 1:
                $distance = (fake()->numberBetween(7, 18) / 60) * $durationMinutes;
                break;
                // cycling
            case 2:
                $distance = (fake()->numberBetween(20, 40) / 60) * $durationMinutes;
                break;
                // walking
            case 3:
                $distance = (fake()->numberBetween(2, 6) / 60) * $durationMinutes;
                break;

            default:
                $distance = (10 / 60) * $durationMinutes;
                break;
        }

        return [
            'name' => 'Some Route',
            'created_by' => fake()->name(),
            'date' => $this->faker->dateTimeBetween('-3 days', 'now'),//date()->dateTimeThisYear(),
            'duration' => $durationMinutes,
            'distance' => $distance,
            'avgHr' => $avgHr,
            'cal' => $cal,
            'route_type_id' => fake()->randomElement($route_types),
        ];
    }
}
