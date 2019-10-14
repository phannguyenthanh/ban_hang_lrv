<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CartDetail;

class CartDetailController extends Controller
{
       public function getlist(){

    	$cartdetail = CartDetail::orderBy('id','DESC')->get();

    	// var_dump($cartdetail);

    	// die();

    	return view('admin.cart_detail.list',['cartdetail'=>$cartdetail]);

    }

  
    public function getremove($ID){

         $cartdetail = Cartdetail::find($ID);

         $cartdetail->delete();

    	return redirect('admin/cart_detail/list');

    }
}
