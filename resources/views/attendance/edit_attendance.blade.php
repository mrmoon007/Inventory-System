@extends('layouts.master')

@section('content')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Update Attendance</h3>
        </div>
        <div style="text-align: center">
            <h1>Updated day {{ $att_date->att_date }}</h1>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form method="POST" action="{{ route('update.attendance') }}">
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
                                    <td>{{ $item->employee->name }}</td>
                                    <td><img src="{{ asset($item->employee->image) }}" style="height: 80px; wigdth: 70px;" ></td>
                                    <td>
                                        <input type="hidden" name="id[]" value="{{ $item->id }}">
                                        <input type="radio" name="attendance[{{ $item->id }}]" value="Present" @if ($item->attendance=='Present') checked

                                        @endif required>  Present
                                        <input type="radio" name="attendance[{{ $item->id }}]" value="Absence" @if ($item->attendance=='Absence') checked

                                        @endif>  Absence
                                        <input type="hidden" name="att_date" value="{{ date('d-m-y') }}">
                                        <input type="hidden" name="att_year" value="{{ date('Y') }}">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="float-end">
                            <button type="submit" class="btn btn-success float-right">Update</button>
                            <button type="reset" class="btn btn-success float-right">Cancal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
