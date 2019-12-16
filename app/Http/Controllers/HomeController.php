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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();
        $newses = News::all()->take(3);
        return view(

            'index',compact('categories','newses'));
    }
}
