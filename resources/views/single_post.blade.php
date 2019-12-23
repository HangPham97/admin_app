@extends('layout.master')
@section('content')
    <div class="site-main-container">
        <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-12 post-list">
                        <!-- Start single-post Area -->
                        <div class="single-post-wrap">
                            <div class="feature-img-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{$news->cover_origin}}" alt="">
                            </div>
                            <div class="content-wrap">
                                <ul class="tags mt-10">
                                    <li><a href="#">{{$news->category->name}}</a></li>
                                </ul>
                                <a href="#">
                                    <h3>{{$news->title}}</h3>
                                </a>
                                <ul class="meta pb-20">
                                    <li><a href="#"><span class="lnr lnr-user"></span>{{$news->author}}</a></li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$news->post_time}}</a>
                                    </li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                </ul>
                                <div class="post_content">
{{--                                    {{$news->content}}--}}
                                    {!!$news->content!!}
                                </div>

                                <div class="navigation-wrap justify-content-between d-flex">
                                    <a class="prev" href="#"><span class="lnr lnr-arrow-left"></span>Prev Post</a>
                                    <a class="next" href="#">Next Post<span class="lnr lnr-arrow-right"></span></a>
                                </div>

                                <div class="comment-sec-area">
                                    <div class="container">
                                        <div class="row flex-column">
                                            <h6>05 Comments</h6>
                                            <div class="comment-list">
                                                <div class="single-comment justify-content-between d-flex">
                                                    <div class="user justify-content-between d-flex">
                                                        <div class="thumb">
                                                            <img src="img/blog/c1.jpg" alt="">
                                                        </div>
                                                        <div class="desc">
                                                            <h5><a href="#">Emilly Blunt</a></h5>
                                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                                            <p class="comment">
                                                                Never say goodbye till the end comes!
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="reply-btn">
                                                        <a href="" class="btn-reply text-uppercase">reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-list left-padding">
                                                <div class="single-comment justify-content-between d-flex">
                                                    <div class="user justify-content-between d-flex">
                                                        <div class="thumb">
                                                            <img src="img/blog/c2.jpg" alt="">
                                                        </div>
                                                        <div class="desc">
                                                            <h5><a href="#">Emilly Blunt</a></h5>
                                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                                            <p class="comment">
                                                                Never say goodbye till the end comes!
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="reply-btn">
                                                        <a href="" class="btn-reply text-uppercase">reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-list">
                                                <div class="single-comment justify-content-between d-flex">
                                                    <div class="user justify-content-between d-flex">
                                                        <div class="thumb">
                                                            <img src="img/blog/c3.jpg" alt="">
                                                        </div>
                                                        <div class="desc">
                                                            <h5><a href="#">Emilly Blunt</a></h5>
                                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                                            <p class="comment">
                                                                Never say goodbye till the end comes!
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="reply-btn">
                                                        <a href="" class="btn-reply text-uppercase">reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h4>Post Comment</h4>
                                <form>
                                    <div class="form-group form-inline">
                                        <div class="form-group col-lg-6 col-md-12 name">
                                            <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                                   onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Enter Name'">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 email">
                                            <input type="email" class="form-control" id="email"
                                                   placeholder="Enter email address" onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Enter email address'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject"
                                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control mb-10" rows="5" name="message"
                                                  placeholder="Messege" onfocus="this.placeholder = ''"
                                                  onblur="this.placeholder = 'Messege'" required=""></textarea>
                                    </div>
                                    <a href="#" class="primary-btn text-uppercase">Post Comment</a>
                                </form>
                            </div>
                        </div>
                        <!-- End single-post Area -->

                        <div class="popular-post-wrap">
                            <h4 class="title">Tin liên quan</h4>
                            <div class="row mt-20 medium-gutters">
                                @foreach($data['latest_newses'] as $news)
                                    @if($loop->index != 0)
                                        <div class="col-lg-4 single-popular-post">
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
                                                <a href="{{route('post',$news->id)}}">
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
                    </div>
{{--                    @include('layout.sidebar')--}}


                </div>
            </div>
        </section>
        <!-- End latest-post Area -->
    </div>
@endsection
@section('script')
<script>
        $('.wp-block-image').addClass("feature-img-thumb relative");
        $('.td_block_template_1').addClass("feature-img-thumb relative");
</script>

@endsection