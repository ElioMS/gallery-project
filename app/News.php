<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;
    
    protected $dates = ['date'];
}
