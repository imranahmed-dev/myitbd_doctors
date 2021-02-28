@extends('frontend.dashboard.dashboard-master')
@section('title','Dashboard')
@section('dashboard')

@php
$allpatient = App\Models\Appointment::where('doctor_id', Auth::user()->id)->count();
$pendingpatient = App\Models\Appointment::where('doctor_id', Auth::user()->id)->where('status',1)->count();
$approvedpatient = App\Models\Appointment::where('doctor_id', Auth::user()->id)->where('status',2)->count();

$rejectedpatient = App\Models\Appointment::where('doctor_id', Auth::user()->id)->where('status',3)->count();
$visitedpatient = App\Models\Appointment::where('doctor_id', Auth::user()->id)->where('status',4)->count();

$comallpatient = App\Models\Appointment::where('doctor_id', Auth::user()->doctor_id)->where('chamber_id', Auth::user()->chamber_id)->count();

$compendingpatient = App\Models\Appointment::where('doctor_id', Auth::user()->doctor_id)->where('status',1)->where('chamber_id', Auth::user()->chamber_id)->count();

$comapprovedpatient = App\Models\Appointment::where('doctor_id', Auth::user()->doctor_id)->where('status',2)->where('chamber_id', Auth::user()->chamber_id)->count();

$comrejectedpatient = App\Models\Appointment::where('doctor_id', Auth::user()->doctor_id)->where('status',3)->where('chamber_id', Auth::user()->chamber_id)->count();

$comvisitedpatient = App\Models\Appointment::where('doctor_id', Auth::user()->doctor_id)->where('status',4)->where('chamber_id', Auth::user()->chamber_id)->count();

$allserials = App\Models\Appointment::where('patient_id', Auth::user()->id)->count();
$visitedserials = App\Models\Appointment::where('patient_id', Auth::user()->id)->where('status',4)->count();



@endphp

<div class="col-md-9">
    <div class="customer-dashboard-body">
       @if(Auth::user()->usertype == 3)
        <div class="row">
            <div class="col-md-3">
                <div class="card dashboard-box bg-primary mb-2  ">
                    <div class="dashbox-txt">
                        <span>{{$allpatient}}</span>
                        <p>All Patient</p>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-box bg-danger  mb-2  ">
                    <div class="dashbox-txt">
                        <span>{{$pendingpatient}}</span>
                        <p>Pending Patient</p>
                    </div>
                    <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-box bg-success   mb-2  ">
                    <div class="dashbox-txt">
                        <span>{{$approvedpatient}}</span>
                        <p>Approved Patient</p>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card dashboard-box bg-warning   mb-2  ">
                    <div class="dashbox-txt">
                        <span class="text-dark">{{$rejectedpatient}}</span>
                        <p class="text-dark">Rejected Patient</p>
                    </div>
                    <a href="#" class="small-box-footer text-dark">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card dashboard-box bg-success   mb-2  ">
                    <div class="dashbox-txt">
                        <span>{{$visitedpatient}}</span>
                        <p>Visited Patient</p>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
               

        </div>
        @endif
        
        @if(Auth::user()->usertype == 4)
        <div class="row">
            <div class="col-md-3">
                <div class="card dashboard-box bg-primary mb-2  ">
                    <div class="dashbox-txt">
                        <span>{{$comallpatient}}</span>
                        <p>All Patient</p>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-box bg-danger  mb-2  ">
                    <div class="dashbox-txt">
                        <span>{{$compendingpatient}}</span>
                        <p>Pending Patient</p>
                    </div>
                    <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-box bg-success   mb-2  ">
                    <div class="dashbox-txt">
                        <span>{{$comapprovedpatient}}</span>
                        <p>Approved Patient</p>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-box bg-warning   mb-2  ">
                    <div class="dashbox-txt">
                        <span class="text-dark">{{$comrejectedpatient}}</span>
                        <p class="text-dark">Rejected Patient</p>
                    </div>
                    <a href="#" class="small-box-footer text-dark">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card dashboard-box bg-success   mb-2  ">
                    <div class="dashbox-txt">
                        <span>{{$comvisitedpatient}}</span>
                        <p>Visited Patient</p>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        @endif
        
        @if(Auth::user()->usertype == 2)
        <div class="row">
            <div class="col-md-3">
                <div class="card dashboard-box bg-primary mb-2  ">
                    <div class="dashbox-txt">
                        <span>{{$allserials}}</span>
                        <p>All Serials</p>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-box bg-success   mb-2  ">
                    <div class="dashbox-txt">
                        <span>{{$visitedserials}}</span>
                        <p>Visited Serials</p>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
