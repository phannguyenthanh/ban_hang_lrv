<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfNews extends Model
{
    
	protected $table = "type_of_news";

	public function news(){

		return $this->hasMany('App\News','news_type_id','id');

	}

}
