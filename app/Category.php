<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    public function menu(){

    	return $this->belongsTo('App\Menu','menu_id','id');

    }
    public function products(){

    	return $this->hasMany('App\Products','category_id','id');

    }
    

}
