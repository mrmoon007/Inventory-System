@extends('home')

@section('content')
<!-- Basic example -->
<div class="col-md-6 col-lg-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">Update Customer</h3></div>
        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('update.customer',$data->id) }} " enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Employee Name</label>
                    <input type="text" name="name" class="form-control" id="" value="{{ $data->name }}" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" id="" value="{{ $data->email }}" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="number" name="phone" class="form-control" id="" value="{{ $data->phone }}" placeholder="Enter Phone number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" id="" value="{{ $data->address }}" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Shop Name</label>
                    <input type="text" name="shopname" class="form-control" id="" value="{{ $data->shopname }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Account holder</label>
                    <input type="text" name="accountHolder" class="form-control" value="{{ $data->account_holder }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Account Number</label>
                    <input type="text" name="accountNumber" class="form-control" value="{{ $data->account_number }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Bank Name</label>
                    <input type="text" name="bankName" class="form-control" value="{{ $data->bank_name }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Bank Branch</label>
                    <input type="text" name="bankBranch" class="form-control" value="{{ $data->bank_branch }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" name="city" class="form-control" id="" value="{{ $data->city }}" >
                </div>
                <div class="form-group">
                    <div>
                        <label for="exampleInputEmail1">Image</label>
                    </div>
                    <img src="{{ asset($data->image) }}" style="height: 80px; wigdth: 70px;" >
                    <input type="file" name="image" class="form-control" id="" placeholder="">
                    <input type="hidden" name="old_image" value="{{ $data->image  }}">
                </div>
                <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
            </form>
        </div><!-- panel-body -->
    </div> <!-- panel -->
</div> <!-- col-->


@endsection
