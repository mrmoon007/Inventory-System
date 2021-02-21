@extends('layouts.master')

@section('content')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">All Attendance</h3>
        </div>
        <div style="text-align: center">
            <h1>Today {{ date("d/m/y") }}</h1>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($all_atten as $item)
                                <tr>
                                    <td>{{ $item->edit_data }}</td>

                                    <th>
                                       <a class="btn btn-info" href="{{ route('edit.attendance',$item->edit_data) }}">Edit Attendance</a>
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
