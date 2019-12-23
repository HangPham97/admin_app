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
        $newses = News::orderBy('post_time', 'desc')->whereNotNull('cate_id')->where('sid_text','vnexpress.net')->take(3)->get();
        $latest_news = News::orderBy('post_time', 'desc')->whereNotNull('cate_id')->first();
        $travel_newses = News::where('cate_id', 3)->take(5)->get();
        $food_newses = News::orderBy('post_time', 'desc')->where('cate_id', 9)->take(4)->get();
        $science_newses = News::orderBy('post_time', 'desc')->where('cate_id', 5)->take(4)->get();
        $entertainment_newses = News::orderBy('post_time','desc')->whereNotNull('cate_id')->where('cate_id', 6)->take(5)->get();

        return view(
            'index', compact( 'newses', 'travel_newses', 'food_newses','science_newses','entertainment_newses','latest_news'));

    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function category($id){
        $newses = News::orderBy('post_time', 'desc')->whereNotNull('cate_id')->where('cate_id',$id)->paginate(12);
        $category_name = Category::find($id);
        return view('category',compact('newses','category_name'));
    }
    public function post($id){
        $news = News::find($id);
        return view('single_post', compact('news'));
    }
}