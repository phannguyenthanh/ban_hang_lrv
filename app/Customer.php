<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";

    public function cart_detail(){

    	return $this->hasMany('App/CartDetail','customer_ID','ID');

    }
}
