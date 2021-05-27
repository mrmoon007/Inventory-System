@extends('home')

@section('content')
<!-- Basic example -->
<div class="col-md-6 col-lg-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">Add Category</h3></div>
        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('create.category') }} " enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Enter name">
                </div>
                
                <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
            </form>
        </div><!-- panel-body -->
    </div> <!-- panel -->
</div> <!-- col-->


@endsection

