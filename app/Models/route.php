<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ['name', 'created_by', 'date', 'duration', 'avgHr', 'cal', 'route_type_id'];

    /** @use HasFactory<\Database\Factories\RouteFactory> */
    use HasFactory;
}
