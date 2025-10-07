<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ['name', 'created_by'];

    /** @use HasFactory<\Database\Factories\RouteFactory> */
    use HasFactory;
}
