@extends('frontend.layouts.master')
@section('title','Doctors')
@section('content')
<style>
    .card {
        border: 1px solid #ddd;
        margin-bottom: 15px;
    }

</style>

<div class="section-header text-center py-4 bg-primary mb-5 text-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Doctors</h2>
            </div>
        </div>
    </div>
</div>

<!--    doctor list-->
<section class="doctor-section">
    <div class="container">
        <div class="row">
           @if($doctors->count())
            @foreach($doctors as $doctor)
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-body doctor-box">
                        <form action="{{route('appoint.store',$doctor->id)}}" method="post">
                           @csrf
                            <div class="row">
                                <div class="col-4">
                                    <h6>Doctor :</h6>
                                </div>
                                <div class="col-8">
                                    <p class="mb-1">{{$doctor->doctor->name}}</p>
                                    <p style="font-size:14px" class="text-muted">{{$doctor->doctor->designation}}</p>
                                </div>

                                <div class="chamber-details card-body bg-light mb-1">
                                    <div class="row">
                                        <div class="col-4">
                                            <h6>Specialist :</h6>
                                        </div>
                                        <div class="col-8">
                                            <p class="mb-1">{{$doctor->specialist}}</p>
                                        </div>

                                        <div class="col-4">
                                            <h6>Appoinment Address :</h6>
                                        </div>
                                        <div class="col-8">
                                            <p class="mb-1">{{$doctor->district}}</p>
                                            <p>{{$doctor->chamberaddress}}</p>
                                        </div>

                                        <div class="col-4">
                                            <h6>Date :</h6>
                                        </div>
                                        <div class="col-8">
                                            <p>{{$doctor->date}}</p>
                                        </div>

                                        <div class="col-4">
                                            <h6>Time :</h6>
                                        </div>
                                        <div class="col-8">
                                            <p>{{$doctor->starttime}} - {{$doctor->endtime}}</p>
                                        </div>
                                        <div class="col-12">
                                            <input class="btn btn-primary btn-sm" type="submit" value="Make Appoint">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center my-3">
                    {!! $doctors->links() !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!--    doctor list-->





@endsection
