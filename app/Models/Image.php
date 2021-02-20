<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
    	'thumbnail',
        'main_img'
    ];

    public function propertys() {
        return $this->belongsTo('App\Models\Property');
    }
}