<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);

        //   view()->share('key', 'value');

        //    view()->share('userg', 'Auth::user()');

        //  if (Auth::check()) {
            
           
        // }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
