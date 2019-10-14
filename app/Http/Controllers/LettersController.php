<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Letters;

class LettersController extends Controller
{
    public function getlist(){

    	$letters = Letters::orderBy('id','DESC')->get();

    	// var_dump($letters);

    	// die();

    	return view('admin.letters.list',['letters'=>$letters]);

    }

  
    public function getremove($ID){

         $letters = Letters::find($ID);

         $letters->delete();

    	return redirect('admin/letters/list');

    }
}
