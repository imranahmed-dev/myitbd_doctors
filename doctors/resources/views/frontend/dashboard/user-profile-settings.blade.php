@extends('frontend.dashboard.dashboard-master')
@section('title','Profile')
@section('dashboard')
<div class="col-md-10">
    <div class="customer-dashboard-body card">
        <!--customer profile area-->
        <div class="row">
            <div class="col">
                <div class="customer-ppn">
                    <div class="customer-pp text-center pt-4">
                        <img src="{{(!empty(Auth::user()->image))?url(Auth::user()->image):url('public/uploaded/user_default/avatar.jpg')}}" alt="">
                    </div>
                    <h4 class="text-center mt-2">{{Auth::user()->name}}</h4>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <div class="customer-p-details card-body">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-4 pp-heading">
                                <span>Name</span>
                            </div>
                            <div class="col-8 pp-body">
                                <span>{{Auth::user()->name}}</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4 pp-heading">
                                <span>Email</span>
                            </div>
                            <div class="col-8 pp-body">
                                <span>{{Auth::user()->email}}</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4 pp-heading">
                                <span>Mobile</span>
                            </div>
                            <div class="col-8 pp-body">
                                <span>{{Auth::user()->mobile}}</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4 pp-heading">
                                <span>Address</span>
                            </div>
                            <div class="col-8 pp-body">
                                <span> {{Auth::user()->address}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
