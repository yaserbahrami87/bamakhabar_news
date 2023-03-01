<?php

namespace App\Providers;

use App\Category;
use App\news;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories=Category::where('status','=',1)
                        ->get();

        View::share('categories_navbar',$categories);

        $news_special=news::where('special','=',1)
                    ->orderby('id','desc')
                    ->get();
        View::share('news_special',$news_special);
    }

}
