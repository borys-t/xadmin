<?php

namespace huprp\xAdmin;

use Artisan;
use Illuminate\Support\ServiceProvider;

class xAdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';

    }
}
