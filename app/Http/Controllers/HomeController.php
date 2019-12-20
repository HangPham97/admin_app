<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\AdminModule\Entities\News;
use Modules\AdminModule\Entities\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $newses = News::orderBy('post_time', 'desc')->whereNotNull('cate_id')->where('sid_text','vnexpress.net')->take(15)->get();
        $latest_news = News::orderBy('post_time', 'desc')->whereNotNull('cate_id')->first();
        $latest_newses = News::orderBy('post_time', 'desc')->whereNotNull('cate_id')->take(8)->get();
//        dd($latest_newses);
        $travel_newses = News::where('cate_id', 3)->take(5)->get();
        $food_newses = News::orderBy('post_time', 'desc')->where('cate_id', 12)->take(4)->get();
        $popular_newses = News::orderBy('post_time', 'desc')->whereNotNull('cate_id')->orderBy('view', 'desc')->take(3)->get();
        $science_newses = News::orderBy('post_time', 'desc')->where('cate_id', 5)->take(4)->get();
        return view(
            'index', compact('categories', 'newses', 'latest_news', 'latest_newses', 'travel_newses', 'food_newses', 'popular_newses','science_newses'));
    }
}