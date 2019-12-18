@extends('layout.masterDashboard')
<!-- Content Wrapper. Contains page content -->
@section('sidebar-wrapper')
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="">
                <a href={{route('admin.home')}}>
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href={{route('user')}}>
                    <i class="now-ui-icons users_single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="table-list active">
                <a class="toggle-down">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>Table List</p>
                </a>
                <ul class="table-menu">
                    <li class="news-table">
                        <a href="{{route('news.home')}}">News</a>
                    </li>
                    <li class="category-table">
                        <a href="{{route('cate.home')}}">Category</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
@endsection
@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="#pablo">Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <form>
                    <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="now-ui-icons ui-1_zoom-bold"></i>
                            </div>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <i class="now-ui-icons media-2_sound-wave"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Stats</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="now-ui-icons location_world"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Some Actions</span>
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#pablo" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Account</span>
                            </p>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="panel-header panel-header-sm">
    </div>
@endsection
@section('content')
    <div class="content">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="alert"><p style="color:red;">
                                {{Session('success')}}
                            </p>
                        </div>
                        <div class="">

                            <div class="">
                                <div class="panel panel-default">
                                    <div class="panel-body row">

                                        <form id = "edit-news" method="post" action="{{route('news.update',$news->id)}}"
                                              id="edit_form"
                                              enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-body col-md-12">
                                                <div class="col-md-8 left-bar">
                                                    <div class="box">
                                                        <div class="box-header">
                                                            <h3 class="box-title">ID:
                                                            </h3>
                                                            <span style="padding-left: 10px; font-weight: 800;font-size: 18px">{{$news->id}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="box">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Title
                                                            </h3>
                                                            <!-- /. tools -->
                                                        </div>
                                                        <!-- /.box-header -->
                                                        <div class="box-body pad" style="">

                                                            <input id="title" type="text" name="title"
                                                                   class="form-control"
                                                                   value="{{$news->title }}"/>

                                                        </div>
                                                    </div>
                                                    <div class="box">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Desc
                                                            </h3>
                                                            <!-- /. tools -->
                                                        </div>
                                                        <!-- /.box-header -->
                                                        <div class="box-body pad" style="">

                                                            <textarea name="desc" rows="5" cols="80"
                                                                      class="form-control desc"
                                                                      placeholder="Here can be your description">{{$news->desc}}</textarea>

                                                        </div>
                                                    </div>
                                                    <div class="box">
                                                        <div class="box-header">
                                                            <h3 class="box-title">Content
                                                            </h3>
                                                        </div>
                                                        <!-- /.box-header -->
                                                        <div class="box-body pad" style="">

                            <textarea required name="news_content" id="content">
                               {{$news->content}}
                            </textarea>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 right-bar">

                                                    <div class="box">
                                                        <div class="box-header box-img-create">
                                                            <h3 class="box-title">Image
                                                            </h3>
                                                            <!-- /.box-header -->
                                                            <div class="box-body pad">
                                                                <input type="text" required id="image"
                                                                       class="form-control file_val image-create" name="cover_origin"
                                                                       value="{{$news->cover_origin}}">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="box">
                                                        <div class="box-header box-img-create">
                                                            <h3 class="box-title">Author
                                                            </h3>
                                                            <!-- /.box-header -->
                                                            <div class="box-body pad">
                                                                <input type="text" required id="image"
                                                                       class="form-control file_val image-create" name="author"
                                                                       value="{{$news->author}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="box">
                                                        <div class="box-header box-cate">
                                                            <h3 class="box-title">Category
                                                            </h3>
                                                            <select name="cate" class="form-check-label">
                                                                @foreach($cate_name as $cate)
                                                                    <?php $checked = "" ?>
                                                                    <div class="form-check form-check-inline">
                                                                            @foreach($cate_name_of_news as $cate_name)
                                                                                @if($cate_name->cate_id == $cate->cate_id)
                                                                                    <?php $checked = "selected"?>
                                                                                @endif
                                                                            @endforeach

                                                                            <option {{$checked}} value="{{$cate->cate_id}}"> {{$cate->name}}
                                                                    </div>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit-input"><input type="submit"
                                                                             class="btn btn-block btn-info btn-flat"
                                                                             value="Submit"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#edit_form').on("submit", function (e) {
                var title = $('#title').val();
                var desc = $('#desc').val();
                var content = CKEDITOR.instances['content'].getData();
                $(".error").remove();
                if (title.length < 10) {
                    $('#title').before('<span class="error" style="color: red">This field must be long than 10 charaters</span>');
                    e.preventDefault();
                }
                if (desc.length < 10) {
                    $('#desc').after('<span class="error" style="color: red">This field must be long than 10 charaters</span>');
                    e.preventDefault();
                }
                if (content.length < 10) {
                    $('#content').after('<span class="error" style="color: red">This field must be long than 10 charaters</span>');
                    e.preventDefault();
                }
            })
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    document.getElementById('image-url').src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

    <script>
        CKEDITOR.replace('content')
        CKFinder.setupCKEditor( editor );
        $(function () {
            $('#content').ckeditor({
                toolbar: 'Full',
                enterMode: CKEDITOR.ENTER_BR,
                shiftEnterMode: CKEDITOR.ENTER_P,
            });
        });

        CKEDITOR.on('instanceReady', function (ev) {
            // Ends self-closing tags the HTML4 way, like <br>.
            ev.editor.dataProcessor.writer.selfClosingEnd = '>';
        });
    </script>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>

@endsection