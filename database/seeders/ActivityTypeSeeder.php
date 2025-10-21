<?php

namespace Database\Seeders;

use App\Models\ActivityType;
use Illuminate\Database\Seeder;

class ActivityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['running', 'cycling', 'walking'];
        foreach ($types as $type) {
            ActivityType::factory()->create([
                'name' => $type,
            ]);
        }
    }
}
