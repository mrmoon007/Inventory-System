@extends('home')

@section('content')
<!-- Basic example -->
<div class="col-md-8 col-lg-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">Update Product</h3></div>
        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('update.products',$data->id) }} " enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="product_name" value="{{$data->product_name}}" class="form-control" id="" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Product code</label>
                    <input type="text" name="product_code" value="{{$data->product_code}}" class="form-control" id="" placeholder="Enter Product Code">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Categories</label>
                    <select name="cate_id" class="form-control">
                        @foreach ($all_category as $item)
                        <option value="{{$item->id}}" <?php if ($data->cate_id==$item->id) {
                            echo "selected";
                        } ?> >{{ $item->cate_name }}</option>
                        @endforeach 
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Suppliers</label>
                    <select name="sup_id" class="form-control">
                        <option value="1" >1</option>
                        <option value="2" >2</option>
                        <option value="3" >3</option>
                        <option value="4" >4</option>
                        <option value="5" >5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Godown</label>
                    <input type="text" name="product_garage" value="{{$data->product_garage}}" class="form-control" id="" placeholder="Enter Godown">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Route</label>
                    <input type="text" name="product_route"  value="{{$data->product_route}}"class="form-control" id="" placeholder="Enter Product Route">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Buying Date</label>
                    <input type="date" name="buy_date" value="{{$data->buy_date}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Expire Date</label>
                    <input type="date" name="expire_date" value="{{$data->expire_date}}" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Buying Price</label>
                    <input type="text" name="buying_price" value="{{$data->buying_price}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Buying Price">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Selling Price</label>
                    <input type="text" name="selling_price" value="{{$data->selling_price}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Selling Price">
                </div>
                
                <div class="form-group">
                    <div>
                        <label for="exampleInputEmail1">Image</label>
                    </div>
                    <img src="{{ asset($data->product_image) }}" style="height: 80px; wigdth: 70px;" >
                    <input type="file" name="product_image" class="form-control" id="" placeholder="">
                    <input type="hidden" name="old_image" value="{{ $data->product_image  }}">
                </div>
                <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
            </form>
        </div><!-- panel-body -->
    </div> <!-- panel -->
</div> <!-- col-->


@endsection
