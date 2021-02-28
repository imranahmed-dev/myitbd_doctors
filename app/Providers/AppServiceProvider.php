<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\SiteSetting;
use App\Models\SocialMedia;
use App\Models\Slider;

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
         
        view()->composer('*', function ($view){

            $sitesetting =SiteSetting::find(1); 
 
            $view->with('sitesetting',$sitesetting);

        });


        view()->composer('*', function ($view){

            $socialmedia =SocialMedia::get(); 
            $view->with('socialmedia',$socialmedia);

        });

        
         view()->composer('*', function ($view){

            $sliders =Slider::get(); 
            $view->with('sliders',$sliders);

        });


        Schema::defaultStringLength(191);
    }
}
