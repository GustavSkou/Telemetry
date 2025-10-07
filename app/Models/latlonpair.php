<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class latlonpair extends Model
{
    protected $fillable = ['route_id', 'latitude', 'longitude'];

    /** @use HasFactory<\Database\Factories\LatlonpairFactory> */
    use HasFactory;
}
