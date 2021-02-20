<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    use HasFactory;

    protected $fillable = [
    	'latitude',
        'length'
    ];

    public function propertys() {
        return $this->belongsTo('App\Models\Property');
    }
}
