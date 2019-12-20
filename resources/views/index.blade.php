@extends('layout.master')
@section('content')
    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row small-gutters">
                    <div class="col-lg-8 top-post-left">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="{{$newses[0]->cover_origin}}" alt="">
                        </div>
                        <div class="top-post-details">
                            <ul class="tags">
                                <li><a href="#">{{$newses[0]->category->name}}</a></li>
                            </ul>
                            <a href="image-post.html">
                                <h3>{{$newses[0]->title}}</h3>
                            </a>
                            <ul class="meta">
                                <li><a href="#"><span class="lnr lnr-user"></span>{{$newses[0]->author}}</a></li>
                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$newses[0]->post_time}}</a>
                                </li>
                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 commentss</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 top-post-right">
                        @foreach($newses as $news)
                            @if($loop->index > 0 && $loop->index < 3)
                                <div class="single-top-post post-left">
                                    <div class="feature-image-thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{$news->cover_origin}}" alt="">
                                    </div>
                                    <div class="top-post-details">
                                        <ul class="tags">
                                            <li><a href="#">{{$news->category->name}}</a></li>
                                        </ul>
                                        <a href="image-post.html">
                                            <h4>{{$news->title}}</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>{{$news->author}}</a></li>
                                            <li><a href="#"><span
                                                            class="lnr lnr-calendar-full"></span>{{$news->post_time}}
                                                </a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 commentss</a></li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                    <div class="col-lg-12">
                        <div class="news-tracker-wrap">
                            <h6><span>Breaking News:</span> <a href="#">{{$latest_newses[0]->title}}</a>
                            </h6>
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
                    <div class="col-lg-8 post-list">
                        <!-- Start latest-post Area -->
                        <div class="latest-post-wrap">
                            <h4 class="cat-title">Latest News</h4>
                            @foreach($latest_newses as $news)
                                @if($loop->index > 0)
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
                                            <a href="image-post.html">
                                                <h4>{{$news->title}}</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>{{$news->author}}</a>
                                                </li>
                                                <li><a href="#"><span
                                                                class="lnr lnr-calendar-full"></span>{{$news->post_time}}
                                                    </a>
                                                </li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 commentss</a>
                                                </li>
                                            </ul>
                                            <p class="excert">
                                                {{$news->desc}}
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!-- End latest-post Area -->

                        <!-- Start banner-ads Area -->
                        <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                            <img class="img-fluid" src="img/banner-ad.jpg" alt="">
                        </div>
                        <!-- End banner-ads Area -->
                        <!-- Start popular-post Area -->
                        <div class="popular-post-wrap">
                            <h4 class="title">Tin phổ biến</h4>
                            <div class="feature-post relative">
                                <div class="feature-img relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{$popular_newses[0]->cover_origin}}" alt="">
                                </div>
                                <div class="details">
                                    <ul class="tags">
                                        <li><a href="#">{{$popular_newses[0]->category->name}}</a></li>
                                    </ul>
                                    <a href="image-post.html">
                                        <h3>{{$popular_newses[0]->title}}</h3>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>{{$popular_newses[0]->author}}
                                            </a></li>
                                        <li><a href="#"><span
                                                        class="lnr lnr-calendar-full"></span>{{$popular_newses[0]->post_time}}
                                            </a>
                                        </li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 commentss</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mt-20 medium-gutters">
                                @foreach($popular_newses as $news)
                                    @if($loop->index != 0)
                                        <div class="col-lg-6 single-popular-post">
                                            <div class="feature-img-wrap relative">
                                                <div class="feature-img relative">
                                                    <div class="overlay overlay-bg"></div>
                                                    <img class="img-fluid" src="{{$news->cover_origin}}" alt="">
                                                </div>
                                                <ul class="tags">
                                                    <li><a href="#">{{$news->category->name}}</a></li>
                                                </ul>
                                            </div>
                                            <div class="details">
                                                <a href="image-post.html">
                                                    <h4>{{$news->title}}</h4>
                                                </a>
                                                <ul class="meta">
                                                    <li><a href="#"><span class="lnr lnr-user"></span>{{$news->author}}
                                                        </a>
                                                    </li>
                                                    <li><a href="#"><span
                                                                    class="lnr lnr-calendar-full"></span>{{$news->post_time}}
                                                        </a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                                </ul>
                                                <p class="excert">
                                                    {{$news->desc}}
                                                </p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- End popular-post Area -->
                        <!-- Start relavent-story-post Area -->
                        <div class="relavent-story-post-wrap mt-30">
                            <h4 class="title">Ẩm Thực - Mua sắm</h4>
                            <div class="relavent-story-list-wrap">
                                @foreach($food_newses as $news)
                                    <div class="single-relavent-post row align-items-center">
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
                                            <a href="image-post.html">
                                                <h4>{{$news->title}}</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>{{$news->author}}</a>
                                                </li>
                                                <li><a href="#"><span
                                                                class="lnr lnr-calendar-full"></span>{{$news->post_time}}
                                                    </a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 commentss</a>
                                                </li>
                                            </ul>
                                            <p class="excert">
                                                {{$news->desc}}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End relavent-story-post Area -->
                    </div>
                    @include('layout.sidebar')
                </div>
            </div>
        </section>
        <!-- End latest-post Area -->
    </div>
@endsection