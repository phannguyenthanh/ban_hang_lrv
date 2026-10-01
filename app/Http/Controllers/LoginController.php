<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;

class LoginController extends Controller
{
    public function getlogin(){

    	return view('admin.login');

    }

    public function postlogin(Request $request){

    	$this->validate( $request,
    		[
    			'email'=>'required',
    			'password'=>'required|min:3'


    		],
    		[
    			'email.required'=>'Bạn chưa nhạp Email',
    			'password.required'=>'Bạn chưa nhạp mật khẩu',
    			'password.min'=>'Bạn chưa nhạp mật khẩu quá ngắn'
    		]

    	);

    	if (Auth::attempt(["email"=>$request->email,'password'=>$request->password])){
    			
    		return redirect('admin/products/list');

    	}
    	else{

    		return redirect('admin/login')->with('loi','Sai tên tài khoản hoặc mật khẩu');

    	}



    }
    public function getlogout(){
    	Auth::logout();

    	return redirect('admin/login');
    }
}
