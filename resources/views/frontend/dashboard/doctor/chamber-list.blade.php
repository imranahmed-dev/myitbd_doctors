@extends('frontend.dashboard.dashboard-master')
@section('title','Chamber List')
@section('dashboard')
<div class="col-md-10">
    <div class="customer-dashboard-body">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0">Chamber List <a href="{{route('chamber.add')}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus-circle"></i> Add More</a></h5>
            </div>
            <div class="card-body table-responsive text-nowrap">
                <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>SN</th>
                            <th>Chamber Address</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($chambers as $chamber)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$chamber->district}}, {{$chamber->chamberaddress}}</td>
                            <td>{{$chamber->date}}</td>
                            <td>{{$chamber->starttime}} - {{$chamber->endtime}}</td>
                            <td>
                                <center>
                                    <a href="{{route('chamber.edit', $chamber->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                    <a id="deleteData" href="{{route('chamber.delete',$chamber->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                </center>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
