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
        View::composer('layouts.sidebar','App\Http\ViewComposer\PublicComposer@allNotice');
        View::composer('index','App\Http\ViewComposer\PublicComposer@collegeInfo');
        View::composer('public.about','App\Http\ViewComposer\PublicComposer@collegeInfo');
        View::composer('public.facts-acts','App\Http\ViewComposer\PublicComposer@collegeInfo');
        View::composer('public.mission','App\Http\ViewComposer\PublicComposer@collegeInfo');
        View::composer('public.location','App\Http\ViewComposer\PublicComposer@collegeInfo');
        View::composer('public.contact-us','App\Http\ViewComposer\PublicComposer@collegeInfo');
        View::composer('layouts.menu','App\Http\ViewComposer\PublicComposer@collegeInfo');
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
