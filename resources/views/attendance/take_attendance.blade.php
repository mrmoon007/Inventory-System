@extends('layouts.master')

@section('content')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Take Attendance</h3>
        </div>
        <div style="text-align: center">
            <h1>Today {{ date("d/m/y") }}</h1>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form method="POST" action="{{ route('insert.attendance') }}">
                        @csrf
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Attendance</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td><img src="{{ asset($item->image) }}" style="height: 80px; wigdth: 70px;" ></td>
                                    <td>
                                        <input type="hidden" name="user_id[]" value="{{ $item->id }}">
                                        <input type="radio" name="attendance[{{ $item->id }}]" value="Present" required>  Present
                                        <input type="radio" name="attendance[{{ $item->id }}]" value="Absence">  Absence
                                        <input type="hidden" name="att_date" value="{{ date('d-m-y') }}">
                                        <input type="hidden" name="att_year" value="{{ date('Y') }}">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            <button type="submit" class="btn btn-success float-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
