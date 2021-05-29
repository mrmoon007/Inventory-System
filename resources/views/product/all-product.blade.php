@extends('layouts.master')

@section('content')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Products List</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Product Godown</th>
                                <th>Buying Date</th>
                                <th>Expire Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($all_product as $item)
                            <tr>
                                <td>{{ $item->product_name }}</td>
                                <td><img src="{{ asset($item->product_image) }}" style="height: 80px; wigdth: 70px;" ></td>
                                <td>{{ $item->product_garage }}</td>
                                <td>{{ $item->buy_date }}</td>
                                <td>{{ $item->expire_date }}</td>
                                <td>
                                    <a href="{{ route('edit.products',$item->id) }}" class="btn btn-sm btn-primary">edit</a>
                                    <a href="{{ route('view.products',$item->id) }}" class="btn btn-sm btn-info"> view</a>
                                    <a href="{{ route('delete.products',$item->id) }}" class="btn btn-sm btn-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$all_product->onEachSide(3)->links()}}

                </div>
                showing {{$all_product->firstItem()}} to {{$all_product->lastItem()}} of {{$all_product->total()}}
            </div>
        </div>
    </div>
</div>

@endsection
