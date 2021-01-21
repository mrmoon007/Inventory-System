@extends('layouts.master')
@section('content')
<!-- Basic example -->
<div class="col-md-7 col-lg-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">Single Employee</h3></div>
        <div class="panel-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Employee Name</label>
                    <p>{{ $data->name }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <p>{{ $data->email }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <p>{{ $data->phone }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <p>{{ $data->address }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Experience</label>
                    <p>{{ $data->experience }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">NID No</label>
                    <p>{{ $data->nid }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Salary</label>
                    <p>{{ $data->salary }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Vacation</label>
                    <p>{{ $data->vacation }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <p>{{ $data->city }}</p>
                </div>
                <div class="form-group">
                    <div>
                        <label for="exampleInputEmail1" class="img-fluid">Image</label>
                    </div>
                    <img src="{{ asset($data->image) }}" style="height: 80px; wigdth: 70px;" >
                    {{-- <p style="hieght:80px; wigdth:60px;">{{ asset($data->image) }}</p> --}}
                </div>
        </div><!-- panel-body -->
    </div> <!-- panel -->
</div> <!-- col-->

@endsection
