@extends('frontend.dashboard.dashboard-master')
@section('title','Visited Serials')
@section('dashboard')
<div class="col-md-10">
    <div class="customer-dashboard-body">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0">Visited Serials</h5>
            </div>
            <div class="card-body table-responsive text-nowrap">
                <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>SN</th>
                            <th>Doctor</th>
                            <th>Specialist</th>
                            <th>Chamber Address</th>
                            <th>Serial No</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($serials as $serial)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <p class="mb-0">{{$serial->doctor->name}}</p>
                                <p class="mb-0 text-muted" style="font-size:13px;">{{$serial->doctor->designation}}</p>
                            </td>
                            <td>{{$serial->chamber->specialist}}</td>
                            <td>{{$serial->chamber->district}}, {{$serial->chamber->chamberaddress}}</td>
                            <td>#{{$serial->serialno}}</td>
                            <td>{{$serial->chamber->date}}</td>
                            <td>{{$serial->chamber->starttime}} - {{$serial->chamber->endtime}}</td>
                            <td>
                                @if($serial->status == 1)
                                <span class="badge badge-danger">Pending</span>
                                @elseif($serial->status == 2)
                                <span class="badge badge-success">Approved</span>
                                @elseif($serial->status == 3)
                                <span class="badge badge-danger">Rejected</span>
                                @elseif($serial->status == 4)
                                <span class="badge badge-success">Visited</span>
                                @endif

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
