<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Setting;
use App\Property;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       View::composer('*', function($view){
            //any code to set $val variable
            $val = Setting::find(1);
            $props = Property::latest()->take(8)->get();
            $view->with(['foo'=>$val, 'props'=>$props]);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
