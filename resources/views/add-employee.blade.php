@extends('home')

@section('content')
<!-- Basic example -->
<div class="col-md-6 col-lg-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">Add Emplouee</h3></div>
        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('create.employee') }} " enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Employee Name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" id="" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="number" name="phone" class="form-control" id="" placeholder="Enter Phone number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" id="" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Experience</label>
                    <input type="text" name="experience" class="form-control" id="" placeholder="Enter experience">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">NID No</label>
                    <input type="text" name="nid" class="form-control" id="exampleInputEmail1" placeholder="Enter nid no">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Salary</label>
                    <input type="text" name="salary" class="form-control" id="exampleInputEmail1" placeholder="Enter salary">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Vacation</label>
                    <input type="text" name="vacation" class="form-control" id="exampleInputEmail1" placeholder="Enter vacation">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Enter city">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                </div>
                <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
            </form>
        </div><!-- panel-body -->
    </div> <!-- panel -->
</div> <!-- col-->


@endsection


@section('script')


{{--<script>--}}
{{--    // sweet-alert--}}
{{--    @if(session::has('message'))--}}
{{--    var type= '{{ Session::get('alert-type','info') }}'--}}
{{--    switch(type){--}}
{{--        case 'info':--}}
{{--            toastr.info("{{ session::get('message') }}");--}}
{{--            break;--}}
{{--        case 'success':--}}
{{--            toastr.success("{{ session::get('message') }}");--}}
{{--            break;--}}
{{--        case 'warning':--}}
{{--            toastr.warning("{{ session::get('message') }}");--}}
{{--            break;--}}
{{--        case 'error':--}}
{{--            toastr.error("{{ session::get('message') }}");--}}
{{--            break;--}}
{{--    }--}}
{{--    @endif--}}
{{--</script>--}}
@endsection
