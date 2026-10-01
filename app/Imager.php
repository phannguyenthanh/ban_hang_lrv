<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imager extends Model
{
    protected $table = "imager";

    public function product(){

    	return $this->belongsTo('App/Products','products_ID','ID');

    }

}
