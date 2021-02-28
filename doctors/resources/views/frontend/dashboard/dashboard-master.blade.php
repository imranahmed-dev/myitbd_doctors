@extends('frontend.layouts.master')
@section('content')
@php
$route = Route::current()->getName();
@endphp

@php
$allpatient = App\Models\Appointment::where('doctor_id', Auth::user()->id)->count();
$pendingpatient = App\Models\Appointment::where('doctor_id', Auth::user()->id)->where('status',1)->count();
$approvedpatient = App\Models\Appointment::where('doctor_id', Auth::user()->id)->where('status',2)->count();

$chamber = App\Models\ChamberDetail::where('doctor_id', Auth::user()->id)->count();
$compounder = App\User::where('doctor_id', Auth::user()->id)->count();
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

<style>
    .card {
        border: 1px solid #ddd;
    }

</style>
<!--start profile section -->
<section class="customer-dashboard clearfix pb-5 pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 pr-0">
                <div class="card customer-dashboard-menu mb-3 mb-md-0">
                    <div class="card-header bg-dark text-light customer-menu-header">
                        <h4 class="m-0 text-light">My account</h4>
                    </div>
                    <ul>

                        <li><a class="@if($route == 'user.dashboard') customer-menu-active @endif" href="{{route('user.dashboard')}}"><i class="fa fa-tachometer"></i> Dashboard</a></li>

                        <li><a class="@if($route == 'user.profile')  customer-menu-active  @endif" href="{{route('user.profile')}}"><i class="fa fa-user text-primary"></i> My Profile</a></li>

                        @if(Auth::user()->usertype == 3)

                        <li><a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-list text-success"></i> My Chambers <i class="fa fa-angle-down float-right pt-2 pr-1"></i></a></li>
                        @php
                        $chamberss = App\Models\ChamberDetail::where('doctor_id',Auth::user()->id)->get();
                        
                        @endphp
                        <div class="collapse bg-light" id="collapseExample">
                           @foreach($chamberss as $chambers)
                            <li style="border-bottom:1px solid #ddd;"><a href="{{route('chamber.patient',$chambers->id)}}"><i class="fa fa-circle-o"></i> {{$chambers->district}}, ({{$chambers->chamberaddress}})</a></li>
                            @endforeach
                        </div>

                        <li><a class="@if($route == 'all.patient')  customer-menu-active  @endif" href="{{route('all.patient')}}"><i class="fa fa-medkit text-info"></i> All Patient <span class="badge badge-info float-right">{{$allpatient}}</span></a></li>

                        <li><a class="@if($route == 'pending.patient')  customer-menu-active  @endif" href="{{route('pending.patient')}}"><i class="fa fa-clock-o text-danger"></i> Pending Patient <span class="badge badge-danger float-right">{{$pendingpatient}}</span></a></li>

                        <li><a class="@if($route == 'approved.patient')  customer-menu-active  @endif" href="{{route('approved.patient')}}"><i class="fa fa-check text-success"></i> Approved Patient <span class="badge badge-success float-right">{{$approvedpatient}}</span></a></li>

                        <li><a class="@if($route == 'rejected.patient')  customer-menu-active  @endif" href="{{route('rejected.patient')}}"><i class="fa fa-close text-danger"></i> Rejected Patient <span class="badge badge-danger float-right">{{$rejectedpatient}}</span></a></li>

                        <li><a class="@if($route == 'visited.patient')  customer-menu-active  @endif" href="{{route('visited.patient')}}"><i class="fa fa-check-circle text-success"></i> Visited Patient <span class="badge badge-success float-right">{{$visitedpatient}}</span></a></li>

                        <li><a class="@if($route == 'chambers')  customer-menu-active  @endif" href="{{route('chambers')}}"><i class="fa fa-map-marker text-danger"></i> Chambers <span class="badge badge-primary float-right">{{$chamber}}</span></a></li>

                        <li><a class="@if($route == 'compounder.list')  customer-menu-active  @endif" href="{{route('compounder.list')}}"><i class="fa fa-users text-info"></i> Compounders <span class="badge badge-info float-right">{{$compounder}}</span></a></li>

                        <li><a class="@if($route == 'create.compounder')  customer-menu-active  @endif" href="{{route('create.compounder')}}"><i class="fa fa-plus-circle text-info"></i> Create Compounder</a></li>
                        @endif

                        @if(Auth::user()->usertype == 4)
                        <li><a class="@if($route == 'compounder.all.patient')  customer-menu-active  @endif" href="{{route('compounder.all.patient')}}"><i class="fa fa-medkit text-info"></i> All Patient <span class="badge badge-info float-right">{{$comallpatient}}</span></a></li>

                        <li><a class="@if($route == 'compounder.pending.patient')  customer-menu-active  @endif" href="{{route('compounder.pending.patient')}}"><i class="fa fa-clock-o text-danger"></i> Pending Patient <span class="badge badge-danger float-right">{{$compendingpatient}}</span></a></li>

                        <li><a class="@if($route == 'compounder.approved.patient')  customer-menu-active  @endif" href="{{route('compounder.approved.patient')}}"><i class="fa fa-check text-success"></i> Approved Patient <span class="badge badge-success float-right">{{$comapprovedpatient}}</span></a></li>

                        <li><a class="@if($route == 'compounder.rejected.patient')  customer-menu-active  @endif" href="{{route('compounder.rejected.patient')}}"><i class="fa fa-close text-danger"></i> Rejected Patient <span class="badge badge-danger float-right">{{$comrejectedpatient}}</span></a></li>

                        <li><a class="@if($route == 'compounder.visited.patient')  customer-menu-active  @endif" href="{{route('compounder.visited.patient')}}"><i class="fa fa-check-circle text-success"></i> Visited Patient <span class="badge badge-success float-right">{{$comvisitedpatient}}</span></a></li>

                        @endif

                        @if(Auth::user()->usertype == 2)

                        <li><a class="@if($route == 'patient.all.serial')  customer-menu-active  @endif" href="{{route('patient.all.serial')}}"><i class="fa fa-list text-info"></i> All Serials <span class="badge badge-info float-right">{{$allserials}}</span></a></li>

                        <li><a class="@if($route == 'patient.visited.serial')  customer-menu-active  @endif" href="{{route('patient.visited.serial')}}"><i class="fa fa-check-circle text-success"></i> Visited Serials <span class="badge badge-success float-right">{{$visitedserials}}</span></a></li>

                        @endif


                        <li><a class="text-primary" href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </div>
            </div>

            @yield('dashboard')

        </div>
    </div>
</section>
<!--end profile section -->

@endsection
