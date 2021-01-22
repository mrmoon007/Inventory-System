@extends('layouts.master')
@section('content')
<!-- Basic example -->
<div class="col-md-7 col-lg-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">Single Customer</h3></div>
        <div class="panel-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Customer Name</label>
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
                    <label for="exampleInputEmail1">shop Name</label>
                    <p>{{ $data->shopname }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">account_holder</label>
                    <p>{{ $data->account_holder }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">account_number</label>
                    <p>{{ $data->account_number }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">bank_name</label>
                    <p>{{ $data->bank_name }}</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">bank_branch</label>
                    <p>{{ $data->bank_branch }}</p>
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
