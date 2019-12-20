<div class="col-lg-4">
    <div class="sidebars-area">
        <div class="single-sidebar-widget editors-pick-widget">
            <h6 class="title">Du lịch</h6>
            <div class="editors-pick-post">
                <div class="feature-img-wrap relative">
                    <div class="feature-img relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="{{$travel_newses[0]->cover_origin}}" alt="">
                    </div>
                    <ul class="tags">
                        <li><a href="#">{{$travel_newses[0]->category->name}}</a></li>
                    </ul>
                </div>
                <div class="details">
                    <a href="image-post.html">
                        <h4 class="mt-20">{{$travel_newses[0]->title}}</h4>
                    </a>
                    <ul class="meta">
                        <li><a href="#"><span
                                        class="lnr lnr-user"></span>{{$travel_newses[0]->author}}
                            </a></li>
                        <li><a href="#"><span
                                        class="lnr lnr-calendar-full"></span>{{$travel_newses[0]->post_time}}
                            </a></li>
                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 comments</a></li>
                    </ul>
                    <p class="excert">
                        {{$travel_newses[0]->desc}}
                    </p>
                </div>
                <div class="post-lists">
                    @foreach($travel_newses as $news)
                        @if($loop->index != 0)
                            <div class="single-post d-flex flex-row">
                                <div class="thumb">
                                    <img class="thum-img" src="{{$news->cover_origin}}" alt="">
                                </div>
                                <div class="detail">
                                    <a href="image-post.html"><h6>{{$news->title}}</h6></a>
                                    <ul class="meta">
                                        <li><a href="#"><span
                                                        class="lnr lnr-calendar-full"></span>{{$news->post_time}}
                                            </a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06
                                                comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
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
            <h6 class="title">Giải trí</h6>
            @foreach($entertainment_newses  as $news)
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
                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 comments</a></li>
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