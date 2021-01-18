<?php

namespace App\Providers;

use App\Blog;
use App\BlogCategory;
use App\ProductCategory;
use App\SiteInfo;
use App\SocialMedia;
use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use Tests\Localization\DaDkTest;

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
        view()->composer('*', function ($view) {

            //both of those are true
//            $siteInfo = SiteInfo::whereId(1)->first();
            $siteInfo = SiteInfo::find(1);
            return $view->with('siteInfo' , $siteInfo);

        });

        view()->composer('*', function ($view) {
            $allsocialMedia = SocialMedia::all();
            return $view->with('allsocialMedia' , $allsocialMedia);
        });

    }
}
