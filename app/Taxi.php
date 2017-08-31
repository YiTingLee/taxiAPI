<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
    //
    protected $fillable = ['name', 'car_id', 'lat', 'lng'];
}
