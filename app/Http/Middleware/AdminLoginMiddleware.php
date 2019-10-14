<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Illuminate\Support\Facades\Auth;
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // use Illuminate\Support\Facades\Auth;

        if (Auth::check()) {
            if (Auth::user()->admin == '1') {
                  return $next($request); 
            }
            else{

        return redirect('admin/login')->with('loi','Sai tài khoản hoặc mật khẩu');

            }
            
           
        }
        else{

            return redirect('admin/login');

        }
       

    }
}
