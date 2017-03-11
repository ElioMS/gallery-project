<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;

class GlobalServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('web.layouts.header' , function ($view) {
            $categories = Category::has('gallery')->get();
            $view->with('categories' , $categories);
        });

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
