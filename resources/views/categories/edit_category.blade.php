@extends('home')

@section('content')
<!-- Basic example -->
<div class="col-md-6 col-lg-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">Edit Category</h3></div>
        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('update.category',$data->id) }} " enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="name" value="{{$data->cate_name}}" class="form-control" id="" placeholder="Enter name">
                </div>
                
                <button type="submit" class="btn btn-purple waves-effect waves-light">Update Category</button>
            </form>
        </div><!-- panel-body -->
    </div> <!-- panel -->
</div> <!-- col-->


@endsection

