<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vin extends Model
{
    public $timestamps = false;
    public function stock()
    {
        return $this->belongsTo('App\Stock');
    }
    public function producteur()
    {
        return $this->belongsToMany('App\Producteur');
    }
}
