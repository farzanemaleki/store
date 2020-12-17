<?php

namespace App\Providers;

use App\ProductCategory;
use Illuminate\Support\ServiceProvider;

class AllCategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $allcategory = ProductCategory::all();
            return $view->with('allcategory' , $allcategory);
        });
    }
}
