<?php

namespace Sixturbo\Support;

use Illuminate\Support\ServiceProvider;

class SupportServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {     
        include __DIR__.'/routes/web.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->make('Devdojo\Contact\Http\Controllers\ContactController');
        $this->loadViewsFrom(resource_path('views/vendor'), 'faq');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/faq.php',
            'faq'
        );
        $this->publishes([
            __DIR__.'/config/faq.php' => config_path('faq.php'),
            __DIR__.'/views' => base_path('resources/views/vendor'),
        ]);
    }
}
