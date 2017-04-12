<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
    	'image_tags' => 'array'
    ];

    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value , '-');
    }

    public function getRouteKeyName() {
    	return 'slug';
    }
    
    public function category() {
    	return $this->belongsTo('App\Category');
    }

}
