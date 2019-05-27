@extends('layout.masterDashboard')
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
                <a class="navbar-brand" href="#pablo">News Table</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a class="nav-link" href="#pablo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <div class="panel-heading col-md-12">
                                        <h4 class="box-title col-md-6">News Table</h4>
                                        <div class="add_button">
                                            <button type="button" class="add-button-color btn btn-block btn-info btn-flat">
                                                <a href="{{ route('news.create') }}">Add</a>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="panel-body row">
                                        <form method="POST" id="search-form" class="form-inline col-md-12" role="form">
                                            {{csrf_field()}}
                                            <div class="col-md-4 form-group title-form">
                                                <label for="name">Title</label>
                                                <input type="text" class="form-control" name="title" id="title"
                                                       placeholder="search title">
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label>Category</label>
                                                <input type="hidden" name="category" value="none">
                                                <select class="selectpicker" name="category" id="category">
                                                    <option name="category" value="none">Tất cả các danh mục</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->cate_id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4 button_submit">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                        </form>

                                        <table id="admin-table" class="table table-striped col-md-12"
                                               style="width: 100%    ">
                                            <thead>
                                            <tr>
                                                <th class="col-md-1">Image</th>
                                                <th class="col-md-1">Title</th>
                                                <th class="col-md-3">Url</th>
                                                <th class="col-md-3">Description</th>
                                                <th class="col-md-4">Content</th>
                                                <th class="col-md-3">Author</th>
                                                <th class="col-md-3">Category</th>
                                                <th class="col-md-3">Action</th>

                                            </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
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

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>

    <script type="text/javascript">
        var table = $('#admin-table').DataTable({
            processing: true,
            serverSide: true,

            ajax: {
                url: "{{ route('table') }}",
                data: function (d) {
                    d.title = $('input[name=title]').val();
                    d.category = $('input[name=category]').val();
                }
            },
            columns: [

                {
                    name: 'cover_origin',
                    data: 'cover_origin',
                    "width": "10%",
                    render: function(data) {
                        return '<img src="'+data+'">'
                    }
                },
                // {data: 'images',name:'image'},
                {data: 'title', name: 'title', "width": "15%"},
                {
                    data: 'url', name: 'url', "width": "15%",
                    render: function (data) {
                        return data;
                    },
                },
                {
                    data: 'display_desc', name: 'desc', "width": "15%",
                    render: function (data) {
                        return data;
                    },
                },
                {
                    data: 'display_content', name: 'content', "width": "20%",
                    render: function (data) {
                        return data;
                    },
                },
                {
                    data: 'author', name: 'author', "width": "7%",
                    render: function (data) {
                        return data;
                    },
                },
                {data: 'category', name: 'cate_id', "width": "7%"},
                {data: 'action', name: 'action', orderable: false, searchable: false, "width": "25%"},
            ]
        });

        $('#search-form').on('submit', function (e) {
            $category = $(".selectpicker option:selected").val();
            $("input[name = 'category']").val($category);
            table.draw();
            e.preventDefault();
        });

    </script>

@endsection