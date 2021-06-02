@extends('layouts.master')

@section('content')

<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12 bg-info">
            <h4 class="pull-left page-title">Pos (Point of sales) </h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#" class="text-white">Moon</a></li>
                <li class="active">{{date('d/m/y')}}</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <br>
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="portfolioFilter">
                    @foreach ($categories as $item)
                    <a href="#" data-filter="*" class="current">{{$item->cate_name}}</a>
                    @endforeach
                </div>
            </div>
    </div>
    <div class="row">
        <br>
        <div class="col-lg-6 bg-secondary">
            
            <div class="price_card text-center">
                <div class="panel-heading m-4 ">
                    <div>
                        <h3 class="panel-title pull-left">Customer</h3>
                    </div>
                    <div >
                        
                        <a class="btn btn-primary waves-effect waves-light pull-right" data-toggle="modal" data-target="#con-close-modal" >Add New</a>
                    </div>
                    
                </div>
                <ul class="price-features">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Unique Price</th>
                                <th>Sub Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php
                            $cartDatas=Cart::content();
                        @endphp
                        <tbody>
                            @foreach ($cartDatas as $data)
                            <tr>
                                <th>{{$data->name}}</th>
                                <th>
                                    <form action="{{route('cart_update',$data->rowId)}}" method="POST">
                                        @csrf
                                        <input type="number" name="qty" value="{{ $data->qty }}" style="width: 70px" >
                                        <button type="submit" class="btn btn-sm btn-success" style="margin-top: -2px;">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </form>
                                </th>
                                <th>{{$data->price}}</th>
                                <th>{{$data->price*$data->qty}}</th>
                                <th>    
                                    <a href="{{route('cart_delete',$data->rowId)}}">
                                        <i class="fa fa-trash text-danger"></i>  
                                    </a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </ul>
                <div class="pricing-footer text-center mt-2  bg-primary">
                    {{-- <span class="price">12</span>
                    <span class="name">12</span> --}}
                    <p>Quantity: {{Cart::count()}}</p>
                    <p>Sub Total: {{Cart::subtotal()}}</p>
                    <p>Vat: {{Cart::tax()}} </p>
                    <hr>
                    <p>Total: {{Cart::total()}}</p>
                </div>
                <form action="{{ route('invoice') }}" method="POST">
                    @csrf
                    <div class="panel-heading bg-info">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div  style="margin-top: 10%">
                            <select name="cust_id" class="form-control">
                                <option disabled selected >Select Customer</option>
                                @foreach ($customer as $item) 
                                <option value="{{$item->id}}"  >{{$item->name}}</option>
                                 
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" >Invoice Create</button>
                </form>
                
            </div>
        </div>
        <div class="col-lg-6">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Datatable</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Product Code</th>
                                        
                                    </tr>
                                </thead>

                         
                                <tbody>
                                    @foreach ($datas as $item)
                                    <tr>
                                        <form action="{{route('add-cart')}}" method="POST"> 
                                            @csrf
                                            <input type="hidden" name="id" value="{{$item->id}}" >
                                            <input type="hidden" name="name" value="{{$item->product_name}}" >
                                            <input type="hidden" name="qty" value="1" >
                                            <input type="hidden" name="price" value="{{$item->selling_price}}" >
                                            <input type="hidden" name="weight" value="0" >
                                            <td>
                                                {{-- <a style="font-size: 20px"></a> --}}
                                                <img src="{{ asset($item->product_image) }}" width="60px" height="60px">
                                            </td>
                                            <td>{{$item->product_name}}</td>
                                            <td>{{$item->category->cate_name}}</td>
                                            <td>{{$item->product_code}}</td>
                                            <td>
                                                <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-plus" ></i></button>
                                            </td>
                                        </form>
                                        
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->


{{-- customer create code start --}}
{{-- Modal Content is Responsive --}}

<form action="{{ route('create.customer') }} " method="POST" enctype="multipart/form-data">
    @csrf
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Add New Customer</h4> 
            </div> 
            <div class="modal-body"> 
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-1" class="control-label">Name</label> 
                            <input type="text" name="name" class="form-control" id="field-1" placeholder="Boston"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Email</label> 
                            <input type="text" name="email" class="form-control" id="field-5" placeholder="United States"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Phone</label> 
                            <input type="text" name="phone" class="form-control" id="field-6" placeholder="123456"> 
                        </div> 
                    </div> 
                </div> 

                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Address</label> 
                            <input type="text" name="address" class="form-control" id="field-4" placeholder="Boston"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">Shop Name</label> 
                            <input type="text" name="shopname" class="form-control" id="field-2" placeholder="United States"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-3" class="control-label">Account Holder</label> 
                            <input type="text" name="accountHolder" class="form-control" id="field-3" placeholder="123456"> 
                        </div> 
                    </div> 
                </div> 
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-9" class="control-label">Account Number</label> 
                            <input type="text" name="accountNumber" class="form-control" id="field-9" placeholder="Boston"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Bank Name</label> 
                            <input type="text" name="bankName" class="form-control" id="field-5" placeholder="United States"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Bank Branch</label> 
                            <input type="text" name="bankBranch" class="form-control" id="field-6" placeholder="123456"> 
                        </div> 
                    </div> 
                </div> 
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">City</label> 
                            <input type="text" name="city" class="form-control" id="field-4" placeholder="Boston"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Image</label> 
                            <input type="file" name="image" class="form-control" id="field-5" accept="image/*" 
                            required
                            onchange="readURL(this);"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" name="name" class="control-label">photo</label> 
                            <img src="#" id="image" >
                            
                        </div> 
                    </div> 
                </div> 
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button> 
            </div> 
        </div> 
    </div>
</div><!-- /.modal -->

</form>

<script>
    function readURL(input){
        if(input.file && input.file[0]){
            var reader=new FileReader();
            reader.onload=function(e){
                $('#image/').attr('src',e.target.value)
                .width(80)
                .height(80);
            };
            reader.readAsDataURL(input.file[0]);
        }
    }
</script>

@endsection
