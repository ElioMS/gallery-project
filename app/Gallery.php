<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
    	'images' => 'array'
    ];
    // public function category() {
    // 	return $this->belongsTo('App/Category');
    // }

}
