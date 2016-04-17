<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [ 'longitude', 'latitude', 'located_at' ];
	protected $dates = [ 'located_at' ];
}
