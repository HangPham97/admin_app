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
        $newses = News::all()->take(15);
        $latest_news = News::orderBy('created_at', 'desc')->first();
        $latest_newses = News::latest()->take(8)->get();
        $travel_newses = News::with('category')->where('cate_id',3)->take(5)->get();
        return view(
            'index',compact('categories','newses','latest_news','latest_newses','travel_newses'));
    }
}
