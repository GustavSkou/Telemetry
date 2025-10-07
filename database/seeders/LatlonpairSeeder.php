<?php

namespace Database\Seeders;

use App\Models\Latlonpair;
use App\Models\Route;
use Illuminate\Database\Seeder;

class LatlonpairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $amount_of_routes = 25;
        // grab all routes created by RouteSeeder
        Route::chunk($amount_of_routes, function ($routes) {
            $amount = 25;
            foreach ($routes as $route) {
                Latlonpair::factory()->count($amount)->create([
                    'route_id' => $route->id,
                ]);
            }
        });
    }
}
