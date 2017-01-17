<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use	Illuminate\Support\Facades\View;

class ImageMyProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        view::composer('layouts.app', 'App\Providers\ViewServiceProviders\ViewProvider');
    }
}
