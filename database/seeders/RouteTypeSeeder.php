<?php

namespace Database\Seeders;

use App\Models\RouteType;
use Illuminate\Database\Seeder;

class RouteTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['running', 'cycling', 'walking'];
        foreach ($types as $type) {
            RouteType::factory()->create([
                'name' => $type,
            ]);
        }
    }
}
