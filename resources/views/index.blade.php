@extends('layout.master')
@section('link')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app_custom.css">
@endsection
@section('content')
    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row small-gutters">
                    <div class="col-lg-8 top-post-left">
                        <div class="feature-image-thumb relative mt-10">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    @foreach($newses as $count => $item)
                                        @if($loop->index < 4)
                                            <div class="item {!! $count == 0 ? 'active' : '' !!}">

                                                <div class="feature-image-thumb relative ">
                                                    <div class="overlay overlay-bg"></div>
                                                    <img class="img-fluid carousel-img" src="{{$item->cover_origin}}"
                                                         alt="">
                                                </div>

                                                <div class="top-post-details">
                                                    <ul class="tags">
                                                        <li><a href="#">{{$item->category->name}}</a></li>
                                                    </ul>
                                                    <a href="image-post.html">
                                                        <h3>{{$item->title}}</h3>
                                                    </a>
                                                    <ul class="meta">
                                                        <li><a href="#"><span
                                                                        class="lnr lnr-user"></span>{{$item->author}}
                                                            </a></li>
                                                        <li><a href="#"><span
                                                                        class="lnr lnr-calendar-full"></span>{{$item->post_time}}
         </a></li>
                                                        <li><a href="#"><span class="lnr lnr-bubble"></span>10 Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        @endif

                                    @endforeach
                                </div>

                            {{--<div class="feature-image-thumb relative">--}}
                            {{--<div class="overlay overlay-bg"></div>--}}
                            {{--<img class="img-fluid" src="img/top-post1.jpg" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="top-post-details">--}}
                            {{--<ul class="tags">--}}
                            {{--<li><a href="#">Food Habit</a></li>--}}
                            {{--</ul>--}}
                            {{--<a href="image-post.html">--}}
                            {{--<h3>A Discount Toner Cartridge Is Better Than Ever.</h3>--}}
                            {{--</a>--}}
                            {{--<ul class="meta">--}}
                            {{--<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>--}}
                            {{--<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>--}}
                            {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}


                            <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 top-post-right">
                        @foreach($newses as $count => $item)
                            @if($loop->index > 4 && $loop->index <= 6)
                                <div class="single-top-post mt-10">
                                    <div class="feature-image-thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{$item->cover_origin}}" alt="">
                                    </div>
                                    <div class="top-post-details">
                                        <ul class="tags">
                                            <li><a href="#">{{$item->category->name}}</a></li>
                                        </ul>
                                        <a href="image-post.html">
                                            <h4>{{$item->title}}</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>{{$item->author}}</a></li>
                                            <li><a href="#"><span
                                                            class="lnr lnr-calendar-full"></span>{{$item->post_time}}

                                                </a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>11 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-lg-12">
                        <div class="news-tracker-wrap">
                            <h6><span>Breaking News:</span> <a href="#">{{$latest_news->title}}</a>
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

                            @foreach($latest_newses as $count => $item)
                                @if($loop->index > 0 && $loop->index < 7)
                                    <div class="single-latest-post row align-items-center">
                                        <div class="col-lg-5 post-left">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="{{$item->cover_origin}}" alt="">
                                            </div>
                                            <ul class="tags">
                                                <li><a href="#">{{$item->category->name}}</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7 post-right">
                                            <a href="image-post.html">
                                                <h4>{{$item->title}}</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>{{$item->author}}</a>
                                                </li>
                                                <li><a href="#"><span
                                                                class="lnr lnr-calendar-full"></span>{{$item->post_time}}
                                                    </a>
                                                </li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                            </ul>
                                            <p class="excert">
                                                {{$item->desc}}
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
                            <h4 class="title">Popular Posts</h4>
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
                                            <li><a href="#"><span class="lnr lnr-user"></span>{{$popular_newses[0]->author}}</a>
                                            </li>
                                            <li><a href="#"><span
                                                            class="lnr lnr-calendar-full"></span>{{$popular_newses[0]->post_time}}
                                                </a>
                                            </li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row mt-20 medium-gutters">

                                    @foreach( $popular_newses as $news)
                                        @if($loop->index > 0)
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
                                                    <li><a href="#"><span
                                                                    class="lnr lnr-user"></span>{{$news->author}}
                                                        </a></li>
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
                            <h4 class="title">Khoa học</h4>
                            <div class="relavent-story-list-wrap">
                                @foreach($science_newses as $news)
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
                                            <li><a href="#"><span class="lnr lnr-user"></span>{{$news->author}}</a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$news->post_time}}</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
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
                    <div class="col-lg-4">
                        <div class="sidebars-area">
                            <div class="single-sidebar-widget editors-pick-widget">
                                <h6 class="title">Travel</h6>
                                <div class="editors-pick-post">

                                    @foreach($travel_newses as $news)
                                        @if($loop->index == 0)
                                            <div class="feature-img-wrap relative">
                                                <div class="feature-img relative">
                                                    <div class="overlay overlay-bg"></div>
                                                    <img class="img-fluid" src="{{$news->cover_origin}}"
                                                         alt="">
                                                </div>
                                                <ul class="tags">
                                                    <li><a href="#">{{$news->category->name}}</a></li>
                                                </ul>
                                            </div>
                                            <div class="details">
                                                <a href="image-post.html">
                                                    <h4 class="mt-20">{{$news->title}}</h4>
                                                </a>
                                                <ul class="meta">
                                                    <li><a href="#"><span
                                                                    class="lnr lnr-user"></span>{{$news->author}}
                                                        </a></li>
                                                    <li><a href="#"><span
                                                                    class="lnr lnr-calendar-full"></span>{{$news->post_time}}
                                                        </a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                                </ul>
                                                <p class="excert">
                                                    {{$news->desc}}
                                                </p>
                                            </div>
                                        @elseif($loop->index > 0)
                                            <div class="post-lists">
                                                <div class="single-post d-flex flex-row">
                                                    <div class="thumb">
                                                        <img src="{{$news->cover_origin}}" alt="">
                                                    </div>
                                                    <div class="detail">
                                                        <a href="image-post.html"><h6>{{$news->title}}</h6></a>
                                                        <ul class="meta">
                                                            <li><a href="#"><span
                                                                            class="lnr lnr-calendar-full"></span>{{$news->post_time}}
                                                                </a></li>
                                                            <li><a href="#"><span
                                                                            class="lnr lnr-bubble"></span>06</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="single-sidebar-widget ads-widget">
                                <img class="img-fluid" src="img/sidebar-ads.jpg" alt="">
                            </div>
                            <div class="single-sidebar-widget newsletter-widget">
                                <h6 class="title">Newsletter</h6>
                                <p>
                                    Here, I focus on a range of items
                                    andfeatures that we use in life without
                                    giving them a second thought.
                                </p>
                                <div class="form-group d-flex flex-row">
                                    <div class="col-autos">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Email Address"
                                                   onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Email Address'" type="text">
                                        </div>
                                    </div>
                                    <a href="#" class="bbtns">Subcribe</a>
                                </div>
                                <p>
                                    You can unsubscribe us at any time
                                </p>
                            </div>
                            <div class="single-sidebar-widget most-popular-widget">
                                <h6 class="title">Ẩm Thực</h6>
                                @foreach($food_newses as $news)
                                    <div class="single-list flex-row d-flex">
                                        <div class="thumb">
                                            <img src="{{$news->cover_origin}}" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="image-post.html">
                                                <h6>{{$news->title}}</h6>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span
                                                                class="lnr lnr-calendar-full"></span>{{$news->post_time}}
                                                    </a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="single-sidebar-widget social-network-widget">
                                <h6 class="title">Social Networks</h6>
                                <ul class="social-list">
                                    <li class="d-flex justify-content-between align-items-center fb">
                                        <div class="icons d-flex flex-row align-items-center">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <p>983 Likes</p>
                                        </div>
                                        <a href="#">Like our page</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center tw">
                                        <div class="icons d-flex flex-row align-items-center">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <p>983 Followers</p>
                                        </div>
                                        <a href="#">Follow Us</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center yt">
                                        <div class="icons d-flex flex-row align-items-center">
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            <p>983 Subscriber</p>
                                        </div>
                                        <a href="#">Subscribe</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center rs">
                                        <div class="icons d-flex flex-row align-items-center">
                                            <i class="fa fa-rss" aria-hidden="true"></i>
                                            <p>983 Subscribe</p>
                                        </div>
                                        <a href="#">Subscribe</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End latest-post Area -->
    </div>
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection