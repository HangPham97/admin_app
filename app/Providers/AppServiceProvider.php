<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Modules\AdminModule\Entities\Category;
use Modules\AdminModule\Entities\News;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $category = Category::all();
        $popular_newses = News::orderBy('post_time', 'desc')->whereNotNull('cate_id')->orderBy('view', 'desc')->take(5)->get();
        $latest_newses = News::orderBy('post_time', 'desc')->whereNotNull('cate_id')->take(6)->get();
        $data = array(
            'category' => $category,
            'popular_newses' => $popular_newses,
            'latest_newses' => $latest_newses,
        );
        View::share('data',$data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
