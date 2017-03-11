<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at'];

    public function getFullNameAttribute() {
    	return $this->name.' '.$this->lastname;
    }
}
