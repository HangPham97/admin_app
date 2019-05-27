<?php

namespace Modules\AdminModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AdminModule\Entities\News;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function __construct() {
        $this->middleware('auth');
    }
    public function getChart()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(12);
        $months_count = DB::table("news")
            ->select(DB::raw("extract(MONTH from created_at) as month"), DB::raw("(COUNT(*)) total_news"))
            ->groupBy(DB::raw("extract(MONTH from created_at)"))
            ->orderBy(DB::raw("extract(MONTH from created_at)"))
            ->get();
        $data = news::renameMonth($months_count);
        $data = json_encode($data);
        $months_count_views = DB::table("news")
            ->select(DB::raw("extract(MONTH from created_at) as month"),DB::raw("SUM(view) as total_views"))
            ->groupBy(DB::raw("extract(MONTH from created_at)"))
            ->orderBy(DB::raw("extract(MONTH from created_at)"))->get();
        $data_views = news::renameMonthViews($months_count_views);
        $data_views = json_encode($data_views);
        return view('adminmodule::index', compact('data','data_views','news'));
    }
//    public function getViewChart()
//    {
//        $months_count = DB::table("news")
//            ->select(DB::raw("extract(MONTH from created_at) as month"),DB::raw("SUM(view) as total_views"))
//            ->groupBy(DB::raw("extract(MONTH from created_at)"))
//            ->orderBy(DB::raw("extract(MONTH from created_at)"))->get();
//        $data = news::renameMonthViews($months_count);
//        return view('adminmodule::chartTemplate', compact('data'));
//    }
//
    public static function test()
    {

       
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('adminmodule::create');
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
