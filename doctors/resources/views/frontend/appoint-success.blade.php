@extends('frontend.layouts.master')
@section('title','Successfully Appointment')
@section('content')

<section class="appoint-success py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="alert alert-success mb-4" role="alert">
                    <strong>Successfully Appointment Created !</strong>
                </div>
                <h5>Your Appointment Details</h5>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th width="30%">Your Serial Number</th>
                        <td>#{{$appointment->serialno}}</td>
                    </tr>
                    <tr>
                        <th width="30%">Doctor</th>
                        <td>
                            <p class="mb-1">{{$appointment->doctor->name}}</p>
                            <p style="font-size:14px" class="text-muted">{{$appointment->doctor->designation}}</p>
                        </td>
                    </tr>
                    <tr>
                        <th width="30%">Specialist</th>
                        <td>{{$appointment->chamber->specialist}}</td>
                    </tr>
                    <tr>
                        <th width="30%">Chamber Address</th>
                        <td>{{$appointment->chamber->chamberaddress}}, {{$appointment->chamber->district}}</td>
                    </tr>
                    <tr>
                        <th width="30%">Date</th>
                        <td>{{$appointment->chamber->date}}</td>
                    </tr>
                    <tr>
                        <th width="30%">Time</th>
                        <td>{{$appointment->chamber->starttime}} - {{$appointment->chamber->endtime}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>


@endsection
