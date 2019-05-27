@if(!empty($news->category))
    @foreach($news->category as $cate)
        <button type="button" class="btn btn-block btn-info btn-sm btn-cate">{{$cate->name }}</button>
    @endforeach
@endif