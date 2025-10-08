<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ['name', 'created_by', 'date', 'duration', 'distance', 'avgHr', 'cal', 'route_type_id'];

    /** @use HasFactory<\Database\Factories\RouteFactory> */
    use HasFactory;

    protected $casts = [
        'date' => 'datetime',
    ];

    public function routeType()
    {
        return $this->belongsTo(RouteType::class, 'route_type_id');
    }

    public function latlonpairs()
    {
        return $this->hasMany(Latlonpair::class, 'route_id');
    }

    // public function get

    public function getTypeName()
    {
        return $this->routeType->name;
    }
}
