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

                                        <form method="post" action="{{route('cate.store')}}" id="edit_form"
                                              enctype="multipart/form-data" style="width: 100%">
                                            {{csrf_field()}}
                                            <div class="col-md-12">
                                                <div class="cate-box col-md-6 col-md-offset-3">
                                                    <div class="box-boder">
                                                        <div class="box box-padding">
                                                            <div class="box-header box-id">
                                                                <h3 class="box-title">Category ID name:
                                                                </h3>

                                                                <div class="box-body pad" style="">
                                                                    <input id="cate-id" type="text" name="cate_id"
                                                                           class="form-control"
                                                                           value="{{old('cate_id')}}"/>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="box">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Name
                                                                </h3>
                                                                <!-- /. tools -->
                                                            </div>
                                                            <!-- /.box-header -->
                                                            <div class="box-body pad" style="">

                                                                <input id="name" type="text" name="name"
                                                                       class="form-control" value="{{old('name')}}">

                                                            </div>
                                                        </div>
                                                        <div class="box box-note">
                                                            <div class="box-header">
                                                                <h3 class="box-title">Note
                                                                </h3>
                                                                <!-- /. tools -->
                                                            </div>
                                                            <!-- /.box-header -->
                                                            <div class="box-body pad" style="">

                                                                <input id="note" type="text" name="note"
                                                                       class="form-control" value="">

                                                            </div>
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
                var name = $('#name').val();
                var cate = $('#cate-id').val();
                $(".error").remove();
                if (name.length < 2) {
                    $('#name').before('<span class="error" style="color: red">This field must be long than 2 charaters</span>');
                    e.preventDefault();
                }
                if (cate.length < 2) {
                    $('#cate-id').before('<span class="error" style="color: red">This field must be long than 2 charaters</span>');
                    e.preventDefault();
                }
            })
        })
    </script>
@endsection