@extends('layouts.master')

@section('content')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Employee List</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>phone</th>
                                <th>Address</th>
                                <th>Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($all_employee as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ asset($item->image) }}" style="height: 80px; wigdth: 70px;" ></td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->salary }}</td>
                                <td>
                                    <a href="{{ route('edit.employee',$item->id) }}" class="btn btn-sm btn-primary">edit</a>
                                    <a href="{{ route('view.employee',$item->id) }}" class="btn btn-sm btn-info"> view</a>
                                    <a href="{{ route('delete.employee',$item->id) }}" class="btn btn-sm btn-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
