<?php

namespace App\Providers;

use App\Blog;
use App\BlogCategory;
use App\ProductCategory;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        view()->composer('*', function ($view) {
            $allBlogCategory = BlogCategory::all();
            return $view->with('allBlogCategory' , $allBlogCategory);
        });
        view()->composer('*' , function ($view){
            $bests = Blog::where('countView' , '>' , '0')->orderBy('countView' , 'desc')->limit(3)->get();
            return $view->with('bests' , $bests);
        });
        view()->composer('*', function ($view) {
            $allBlog = Blog::where('tags' , '!=' , null)->orderBy('id', 'desc')->limit(30)->get();
            return $view->with('allBlog' , $allBlog);
        });
    }
}
