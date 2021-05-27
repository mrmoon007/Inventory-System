@extends('layouts.master')

@section('content')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Categories List</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Category name</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($all_category as $item)
                            <tr>
                                <td>{{ $item->cate_name }}</td>
                                
                                <td class="float-right">
                                    <a href="{{ route('edit.category',$item->id) }}" class="btn btn-sm btn-primary">edit</a>
                                    <a href="{{ route('delete.category',$item->id) }}" class="btn btn-sm btn-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$all_category->onEachSide(3)->links()}}

                </div>
                showing {{$all_category->firstItem()}} to {{$all_category->lastItem()}} of {{$all_category->total()}}
            </div>
        </div>
    </div>
</div>

@endsection
