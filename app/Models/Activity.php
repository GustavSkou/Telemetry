<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['name', 'created_by', 'date', 'duration', 'distance', 'avgHr', 'cal', 'activity_type_id'];

    /** @use HasFactory<\Database\Factories\ActivityFactory> */
    use HasFactory;

    protected $casts = [
        'date' => 'datetime',
        'distance' => 'decimal:3',
    ];

    public function activityType()
    {
        return $this->belongsTo(ActivityType::class, 'activity_type_id');
    }

    public function latlonpairs()
    {
        return $this->hasMany(Latlonpair::class, 'activity_id');
    }

    // public function get

    public function getTypeName()
    {
        return $this->activityType->name;
    }

    public function getDistance() {
        $latLngs = $this->latlonpairs();
        if ($latLngs->count() > 1) {
            return $this->distance;
        }
        else {
            $resultDistance = 0;
            for ($i = 0; $i < $latLngs->count()-1  ; $i++ ) {
                $resultDistance += $this->calculateDistance($latLngs[$i]->latitude, $latLngs[$i+1]->latitude, $latLngs[$i]->longitude, $latLngs[$i+1]->longitude);
            }
            return $resultDistance;
        }
    }

    function calculateDistance($lat1, $lon1, $lat2, $lon2) {
        $r = 6371;
        $p = pi() / 180;

        $a =
            0.5 -
            cos(($lat2 - $lat1) * $p) / 2 +
            (cos($lat1 * $p) *
            cos($lat2 * $p) *
            (1 - cos(($lon2 - $lon1) * $p))) /
            2;

        return 2 * $r * asin(sqrt($a));
    }
}
