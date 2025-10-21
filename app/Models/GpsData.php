<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GpsData extends Model
{
    protected $fillable = ['activity_id', 'latitude', 'longitude', 'elevation', 'timestamp'];

    /** @use HasFactory<\Database\Factories\GpsDataFactory> */
    use HasFactory;
}
