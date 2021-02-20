<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;

    protected $fillable = [
    	'property_id',
    	'features',
        'amenities',
        'specialf',
        'information',
        'rooms',
        'bathrooms',
        'size',
        'details',
    ];

    public function propertys() {
        return $this->belongsTo('App\Models\Property');
    }
}
