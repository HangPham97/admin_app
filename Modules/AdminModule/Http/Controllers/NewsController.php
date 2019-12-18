<?php

namespace Modules\AdminModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AdminModule\Entities\News;
use Modules\AdminModule\Entities\Category;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        $categories = Category::all();

        return view('adminmodule::newsTable', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $cate_name = Category::all();
        return view('adminmodule::addNews', compact('cate_name'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $news = new news();
        $news['id'] = $request->id;
        $news['title'] = $request->title;
        $news['content'] = $request->news_content;
        $news['desc'] = $request->desc;
        $news['cover_origin'] = $request->cover_origin;

//        if ($request->hasFile('image')) { //check if has input image
//            $img = $request->file('image')->getClientOriginalName();
//            $request->image->move('images', $img); //move image to serve
//            $news['image'] = $img;
//        }

//        $cate_name = Category::all();

        $news['cate_id'] = $request->cate;
        $news['author'] = $request->author;


        return redirect('/admin/news')->with("success", "Thêm thành công!");

    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $news = news::where('id', $id)->first();
        $cate_name = Category::all();
        $cate_name_of_news = News::getCateName($id);

        return view('adminmodule::editNews', compact('news', 'cate_name', 'cate_name_of_news'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $news_update = [];
        $news_update['title'] = $request->title;
        $news_update['content'] = $request->news_content;
        $news_update['desc'] = $request->desc;
//        if ($request->hasFile('image')) {
//            $img = $request->file('image')->getClientOriginalName();
//            $request->image->move('images', $img);
//            $news_update['image'] = $img;
//        }

        $news_update['cate_id'] = $request->cate;

        $news_update['author'] = $request->author;

        News::where('id', $id)->update($news_update);
        return redirect('/admin/news')->with("success", "Chỉnh sửa thành công!");
    }

    public function delete($id)
    {
        News::where('id', $id)->delete();
        return redirect('/admin/news')->with("success", "Xóa thành công!","alert","Deleted");
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
