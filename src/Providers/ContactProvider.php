<?php

namespace Trado006\Contact\Providers;

use Illuminate\Support\ServiceProvider;

class ContactProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->mergeConfigFrom(
            __DIR__.'/../config/contact.php', 'contact'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/contact.php' => config_path('contact.php'),
        ]);
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
