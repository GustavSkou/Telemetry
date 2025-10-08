<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $created_by
 * @method static \Database\Factories\RouteFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Route whereUpdatedAt($value)
 */
	class Route extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $route_id
 * @property float $latitude
 * @property float $longitude
 * @method static \Database\Factories\latlonpairFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|latlonpair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|latlonpair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|latlonpair query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|latlonpair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|latlonpair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|latlonpair whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|latlonpair whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|latlonpair whereRouteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|latlonpair whereUpdatedAt($value)
 */
	class latlonpair extends \Eloquent {}
}

