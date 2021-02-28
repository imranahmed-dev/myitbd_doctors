@extends('frontend.layouts.master')
@section('title','Doctor Register')
@section('content')


<!-- START REGISTATION FORM -->
<div class="registation-form py-5">
    <div class="container">
        <div class="form card" style="border: 1px solid #ddd; padding:30px">
            <div class="form-head text-center pb-3">
                <h2 class="text-capitalize text-underline">Doctor Registration</h2>
            </div>
            
            <form action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6 form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id="" placeholder="Enter your name" value="{{ old('name') }}">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="">Designation</label>
                        <input type="text" class="form-control" name="designation" id="mobile" placeholder="Designation" value="{{ old('designation') }}">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('designation'))?($errors->first('designation')):''}}</div>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="">Degree</label>
                        <input type="text" class="form-control" id="" name="degree" placeholder="Degree" value="{{ old('degree') }}">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('degree'))?($errors->first('degree')):''}}</div>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="">Certificate Attachment</label>
                        <input type="file" class="form-control" name="certificate" value="{{ old('username') }}">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('certificate'))?($errors->first('certificate')):''}}</div>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="">Mobile Number</label>
                        <input type="text" class="form-control" name="mobile" placeholder="Mobile number" value="{{ old('mobile') }}">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('mobile'))?($errors->first('mobile')):''}}</div>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 form-group">
                        <label for="#">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('password'))?($errors->first('password')):''}}</div>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="#">Confirm Password</label>
                        <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password" value="{{ old('password_confirmation') }}">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('password_confirmation'))?($errors->first('password_confirmation')):''}}</div>
                    </div>
                    <div class="col-12 form-group">
                        <label for="">Address</label>
                        <textarea class="form-control" name="address" rows="3" placeholder="Address">{{ old('address')}}</textarea>
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('address'))?($errors->first('address')):''}}</div>
                    </div>
                    <div class="col-4 text-center mx-auto">
                        <input class="btn btn-primary btn-block" type="submit" value="Register">
                    </div>
                </div>
                
            </form>
        </div>

    </div>
</div>
<!-- END RESISTATION FORM -->
@section('customjs')


@endsection
@endsection
