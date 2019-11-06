<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema; //NEW: Import Schema

use Illuminate\Support\ServiceProvider;
use App\Loaisanpham;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('frontend.includes.menu',function($view){
            $loai = Loaisanpham::all();
            $view->with('loai',$loai);
        });

    }
}
