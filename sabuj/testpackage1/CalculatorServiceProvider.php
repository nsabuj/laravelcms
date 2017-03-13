<?php

namespace Sabuj\Testpackage1;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/route.php');

     //   $this->loadViewsFrom(__DIR__.'/views', 'testpackage1');

      //  require __DIR__.'/routes/route.php';

        $this->loadViewsFrom(__DIR__ . '/views', 'testpackage1');


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('testpackage1',function(){
            return new Calculator();
        });
    }
}
