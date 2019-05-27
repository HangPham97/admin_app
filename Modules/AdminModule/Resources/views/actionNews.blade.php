<!--<a onclick="editData({{$news->id }})" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> -->


<a href="{{route('edit',$news->id )}}" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a>
<a onclick="return confirm('Are you sure to delete?')" href="{{route('delete',$news->id )}}" class="del-button btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>