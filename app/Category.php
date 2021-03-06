<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function gallery() {
    	return $this->hasMany('App\Gallery');
    }

    public function getRouteKeyName() {
    	return 'slug';
    }

    public function getStatusNameAttribute() {
    	$this->status == 1 ? $value = 'ACTIVE' : $value = 'INACTIVE';
    	return $value;
    }
}
