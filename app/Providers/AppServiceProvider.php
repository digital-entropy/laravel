<?php

namespace App\Providers;

use App\Http\Routes\DefaultRoute;
use Illuminate\Support\ServiceProvider;

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
        if ($this->app->routesAreCached()) {
            $this->app->call(DefaultRoute::class.'@'.'callPreRouting');
        }
    }
}
