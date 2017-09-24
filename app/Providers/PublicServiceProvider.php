<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class PublicServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {        
        View::composer('index','App\Http\ViewComposer\PublicComposer@allBlog');
        View::composer('index','App\Http\ViewComposer\PublicComposer@allNotice');
        View::composer('layouts/sidebar','App\Http\ViewComposer\PublicComposer@allNotice');
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
