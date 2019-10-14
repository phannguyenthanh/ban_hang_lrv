<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";

    public function typeofnews(){

    	return $this->belongsTo('App\TypeOfNews','news_type_id','id');

    }

}
