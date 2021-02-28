@extends('frontend.layouts.master')
@section('title','Patient Register')
@section('content')

<!-- START REGISTATION FORM -->
<div class="registation-form py-5">
    <div class="container">
        <div class="form card" style="border: 1px solid #ddd; padding:30px">
            <div class="form-head text-center pb-3">
                <h2 class="text-capitalize text-underline">Patient Ragistration</h2>
            </div>
            <form action="{{route('patient.store')}}" method="post">
               @csrf
                <div class="row">
                    <div class="col-12 col-md-6 form-group">
                        <label class="label-color" for="">Name</label>
                        <input type="text" class="form-control" name="name" id="" placeholder="Enter your name">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label class="label-color" for="">Age</label>
                        <input type="text" name="age" class="form-control" placeholder="Enter your age">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('age'))?($errors->first('age')):''}}</div>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label class="label-color" for="">Phone Number</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter your phobe number">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('mobile'))?($errors->first('mobile')):''}}</div>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label class="label-color" for="">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="#">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('password'))?($errors->first('password')):''}}</div>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="#">Confirm Password</label>
                        <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password">
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('password_confirmation'))?($errors->first('password_confirmation')):''}}</div>
                    </div>
                    <div class="col-12 form-group">
                        <textarea class="form-control" name="address" rows="5" placeholder="Address"></textarea>
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




@endsection
