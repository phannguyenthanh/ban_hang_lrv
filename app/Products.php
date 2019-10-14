<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";

    public function category(){

		 return $this->belongsTo('App\Category','category_id','id');

    }

    public function cartdetail(){

		 return $this->hasMany('App\CartDetail','products_id','id');

    }

        public function slide_img(){

		 return $this->hasMany('App\Imager','products_id','id');

    }

}
