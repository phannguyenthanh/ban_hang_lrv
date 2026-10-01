<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    protected $table = "cart_detail";

    public function customer(){

    	return $this->belongsTo('App\Customer','customer_id','id');

    }

    public function Products(){

    	return $this->belongsTo('App\Products','products_id','id');

    }
}
