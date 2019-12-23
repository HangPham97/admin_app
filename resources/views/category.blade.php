@extends('layout.master')
@section('content')
    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-nav-area">
                            <h1 class="text-white">{{$category_name->name}}</h1>
                            <p class="text-white link-nav"><a href="{{route('home')}}">Home </a>
                                <span class="lnr lnr-arrow-right"></span><a href="category.html">{{$category_name->name}}</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="news-tracker-wrap">
                            @if($newses->isEmpty())
                                <h6>
                                    <span>Breaking News:</span>
                                    <a href="#"></a>
                                </h6>
                            @else
                                <h6>
                                    <span>Breaking News:</span>
                                    <a href="#">{{$newses[0]->title}}</a>
                                </h6>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End top-post Area -->
        <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-8 post-list category-list">
                        <!-- Start latest-post Area -->
                        <div class="latest-post-wrap ">
                            <h4 class="cat-title">{{$category_name->name}}</h4>
                            @foreach($newses as $news)
                                <div class="single-latest-post row align-items-center">
                                    <div class="col-lg-5 post-left">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{$news->cover_origin}}" alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="#">{{$news->category->name}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7 post-right">
                                        <a href="{{route('post',$news->id)}}">
                                            <h4>{{$news->title}}</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>{{$news->author}}</a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$news->post_time}}</a>
                                            </li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                        </ul>
                                        <p class="excert">
                                            {{$news->desc}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                            <nav>
                                <ul class="pagination justify-content-end">
                                    {{$newses->links('vendor.pagination.bootstrap-4')}}
                                </ul>

                                @if($newses->isEmpty())
                                    <h6>
                                        <span>Không có kết quả</span>
                                    </h6>
                                @endif
                            </nav>

                        </div>
                        <!-- End latest-post Area -->
                    </div>
                    @include('layout.sidebar')
                </div>
            </div>
        </section>
        <!-- End latest-post Area -->
    </div>
@endsection