<?php namespace Ko3\Arr;

use Ko3\Classes\Arr;

class ArrServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;


    /**
    * Bootstrap services.
    *
    * @return void
    */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }

    /**
    * Register services.
    *
    * @return void
    */
    public function register()
    {
        //
    }
}
