<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use Response;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('MyDir', function ($var){

            return "<p> Hello $var </p>";

        });

        Response::macro('myRes', function ($var){

           return Response::make($var);

        });

//        DB::listen(function ($query){
//
//            dump($query->sql);
//
//            // dump($query->bindings);
//
//        });



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
