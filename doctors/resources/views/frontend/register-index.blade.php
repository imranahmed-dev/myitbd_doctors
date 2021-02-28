@extends('frontend.layouts.master')
@section('title','Registration')
@section('content')
<style>
    .regi-index{
        background: linear-gradient(rgba(33, 45, 56, 0.72),rgba(33, 45, 56, 0.63)), url( {{asset('public/frontend/photos/banner5.jpg')}} );
        padding: 230px 0;
        background-repeat: no-repeat;
         background-size: 100% 100%;
    }
</style>
<section class="regi-index">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <a href="{{route('patient.register')}}" class="btn btn-info btn-lg btn-block my-4"><i class="fa fa-user"></i> Register as a Patient</a>
                <a href="{{route('doctor.register')}}" class="btn btn-primary btn-lg btn-block my-4"><i class="fa fa-medkit"></i> Register as a Doctor</a>
            </div>
        </div>
    </div>
</section>

@endsection
