<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bottle extends Model
{
    public function color()
    {
        return $this->belongsTo('App\Color');
    }
    public function taste()
    {
        return $this->belongsToMany('App\Taste');
    }
 
    public $timestamps = false;
}

