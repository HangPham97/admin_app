<?php

namespace Modules\AdminModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DataTables;

use Modules\AdminModule\Entities\News;
use Modules\AdminModule\Entities\Category;
//use Modules\AdminModule\Entities\NewsCate;

class DatatableController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function __construct() {
        $this->middleware('auth');
    }
    public function apiTable(Request $request)
    {
        $newses = News::select(['news.id', 'title', 'desc', 'content', 'cover_origin','author','url']);

        return DataTables::of($newses)
            ->filter(function ($query) use ($request) {


                if ($request->has('title')) {
                    $query->where('title', 'like', $request->get('title') . '%');
                }
                if ($request->get('category') != "none") {
                    $query->join('category', 'news.cate_id', '=', 'category.cate_id')
                        ->where('category.cate_id', $request->category);
                }
            })
            ->addColumn('cover_origins', function (News $news) {
//                $cover_origin = News::getDataUrl($news->cover_origin);
//                $news->cover_origins = $cover_origin;
                return view('adminmodule::imageDisplay', compact('news'));
            })
            ->addColumn('url', function (News $news) {
                return $news->url;
            })
            ->addColumn('display_desc', function (News $news) {
                return $news->desc;
            })
            ->addColumn('author', function(News $news){
                return $news->author;
            })
            ->addColumn('display_content', function (News $news) {
                $desc_content = substr($news->content,0,200).' ...';
                $news->display_content =  $desc_content;
                return $news->display_content;
            })

            ->addColumn('action', function (News $news) {
                return view('adminmodule::actionNews', compact('news'));
            })
            ->addColumn('category', function (News $news) {
                $category = News::getCateName($news->id);
                $news->category = $category;

                return view('adminmodule::cateDisplay', compact('news'));
            })
            ->rawColumns(['action', 'category', 'cover_origin'])
            ->make(true);

    }

    public function cateDataTable(){
        $categories = Category::select(['cate_id','name','note']);
        return DataTables::of($categories)
            ->addColumn('action', function (Category $cate) {
                    return view('adminmodule::actionCategory', compact('cate'));
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('adminmodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('adminmodule::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
