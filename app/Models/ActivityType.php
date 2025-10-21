<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityType extends Model
{
    protected $fillable = ['name'];

    /** @use HasFactory<\Database\Factories\RouteTypeFactory> */
    use HasFactory;
}
