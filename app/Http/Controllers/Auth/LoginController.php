<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


// use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    //  public function Login(Request $request){

    //     dd($request->all());

    //     die();

    //     $this->validate( $request,
    //         [
    //             'email'=>'required',
    //             'password'=>'required|min:3'


    //         ],
    //         [
    //             'email.required'=>'Bạn chưa nhạp Email',
    //             'password.required'=>'Bạn chưa nhạp mật khẩu',
    //             'password.min'=>'Bạn chưa nhạp mật khẩu quá ngắn'
    //         ]

    //     );

    //     if (Auth::attempt(["email"=>$request->email,'password'=>$request->password])){
                
    //         return redirect('admin/products/list');

    //     }
    //     else{

    //         return redirect('admin/login')->with('loi','Sai tên tài khoản hoặc mật khẩu');

    //     }



    // }
}
