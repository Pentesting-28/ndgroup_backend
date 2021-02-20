<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
    	'properti',
        'city',
        'residency',
        'adress',
        'url',
        'status'
    ];

    public function payments(){
        return $this->hasMany('App\Models\Payment');
    }

    public function characteristics(){
        return $this->hasMany('App\Models\Characteristic');
    }

    public function coordinates(){
        return $this->hasMany('App\Models\Coordinate');
    }

    public function images(){
        return $this->hasMany('App\Models\Image');
    }

    public function contacts(){
        return $this->hasMany('App\Models\Contact');
    }

    public function getRouteKeyName(){
    	return 'url';
    }
}
