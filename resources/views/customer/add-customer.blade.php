@extends('home')

@section('content')
<!-- Basic example -->
<div class="col-md-6 col-lg-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">Add Customer</h3></div>
        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('create.customer') }} " enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Customer Name</label>
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
                    <label for="exampleInputEmail1">Shop Name</label>
                    <input type="text" name="shopname" class="form-control" id="" placeholder="Enter shopname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Account holder</label>
                    <input type="text" name="accountHolder" class="form-control" id="exampleInputEmail1" placeholder="Enter account holder">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Account Number</label>
                    <input type="text" name="accountNumber" class="form-control" id="exampleInputEmail1" placeholder="Enter account no">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Bank Name</label>
                    <input type="text" name="bankName" class="form-control" id="exampleInputEmail1" placeholder="Enter bank name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Bank Branch</label>
                    <input type="text" name="bankBranch" class="form-control" id="exampleInputEmail1" placeholder="Enter bank branch name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Enter city">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" 
                    id="exampleInputEmail1" >
                </div>
                
                <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
            </form>
        </div><!-- panel-body -->
    </div> <!-- panel -->
</div> <!-- col-->


@endsection
