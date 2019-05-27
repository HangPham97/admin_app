<?php

namespace Modules\AdminModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AdminModule\Entities\News;
use Modules\AdminModule\Entities\Category;
use Modules\AdminModule\Entities\NewsCate;

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

        $news_search = news::where('id', $news['id'])->first();
        if (!empty($news_search)) {
            return redirect('/adminmodule/create')->with("success", "ID này đã tồn tại", compact('news'))->withInput($request->input());
        } else{
            $new_list_cates = $request->cate;
            if (!empty($new_list_cates)) {
                foreach ($new_list_cates as $list_cate) {
                    $news_cate = new NewsCate();
                    $news_cate->id = $request->id;;
                    $news_cate->cate_id = $list_cate;
                    $news_cate->save();
                }
            }
            $news->save();
            return redirect('/adminmodule/news')->with("success", "Thêm thành công!");
        }
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
//        $news->category = $category
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
        $category = $request->cate;
        $news_update['cate_id'] = $category;
//        if ($request->hasFile('image')) {
//            $img = $request->file('image')->getClientOriginalName();
//            $request->image->move('images', $img);
//            $news_update['image'] = $img;
//        }

//        if (!empty($list_cates)) {
//            foreach ($list_cates as $list_cate) {
//                $news_cate = NewsCate::where(function ($query) use ($id, $list_cate) {
//                    $query->where('id', '=', $id);
//                    $query->where('cate_id', '=', $list_cate);
//                })
//                    ->first();
//                if (empty($news_cate)) {
//                    $news_cate = new NewsCate();
//                    $news_cate->id = $id;
//                    $news_cate->cate_id = $list_cate;
//                    $news_cate->save();
//                }
//            }
//
//        }


        News::where('id', $id)->update($news_update);
        return redirect('/admin/news')->with("success", "Chỉnh sửa thành công!");
    }

    public function delete($id)
    {
        News::where('id', $id)->delete();
        NewsCate::where('id', $id)->delete();
        return redirect('/adminmodule/news')->with("success", "Xóa thành công!","alert","Deleted");
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
