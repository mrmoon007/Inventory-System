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
        <div class="col-lg-4 bg-info">
            <div class="panel-heading">
                <h3 class="panel-title pull-left">Customer</h3>
                <a class="btn btn-primary waves-effect waves-light pull-right" data-toggle="modal" data-target="#con-close-modal" >Add New</a>
                <select>
                    <option>Select Customer</option>
                    @foreach ($customer as $item) 
                    <option>Customer</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-8">
            
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
                                        <td>
                                            <a style="font-size: 20px"><i class="fa fa-plus" ></i></a>
                                            <img src="{{ asset($item->product_image) }}" width="60px" height="60px">
                                        </td>
                                        <td>{{$item->product_name}}</td>
                                        <td>{{$item->category->cate_name}}</td>
                                        <td>{{$item->product_code}}</td>
                                        
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

{{-- Modal Content is Responsive --}}

<form>
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
                            <label for="field-4" class="control-label">Name</label> 
                            <input type="text" class="form-control" id="field-4" placeholder="Boston"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Email</label> 
                            <input type="text" class="form-control" id="field-5" placeholder="United States"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Phone</label> 
                            <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                        </div> 
                    </div> 
                </div> 

                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Address</label> 
                            <input type="text" class="form-control" id="field-4" placeholder="Boston"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Shop Name</label> 
                            <input type="text" class="form-control" id="field-5" placeholder="United States"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Account Holder</label> 
                            <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                        </div> 
                    </div> 
                </div> 
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Account Number</label> 
                            <input type="text" class="form-control" id="field-4" placeholder="Boston"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Bank Name</label> 
                            <input type="text" class="form-control" id="field-5" placeholder="United States"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Bank Branch</label> 
                            <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                        </div> 
                    </div> 
                </div> 
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">City</label> 
                            <input type="text" class="form-control" id="field-4" placeholder="Boston"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Image</label> 
                            <input type="file" class="form-control" id="field-5" placeholder="United States"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Zip</label> 
                            <input type="text" class="form-control" id="field-6" placeholder="123456"> 
                        </div> 
                    </div> 
                </div> 
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button> 
            </div> 
        </div> 
    </div>
</div><!-- /.modal -->

</form>

@endsection
