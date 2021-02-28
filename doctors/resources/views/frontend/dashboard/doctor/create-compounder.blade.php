@extends('frontend.dashboard.dashboard-master')
@section('title','Create Compounder')
@section('dashboard')
<div class="col-md-10">
    <div class="customer-dashboard-body">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0"><i class="fa fa-plus-circle"></i> Create Compounder</h5>
            </div>
            <div class="card-body table-responsive text-nowrap">
                <form action="{{route('compounder.store')}}" method="post">
                   @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chamber</label>
                                
                                <select name="chamber" id="" class="form-control">
                                    <option value="">Select Chamber</option>
                                    @foreach($chamberaddress as $chamberaddres)
                                    <option value="{{$chamberaddres->id}}">{{$chamberaddres->district}} ({{$chamberaddres->chamberaddress}})</option>
                                    @endforeach
                                    
                                </select>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('chamber'))?($errors->first('chamber')):''}}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter email">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" name="mobile" class="form-control" placeholder="Enter number">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('mobile'))?($errors->first('mobile')):''}}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('password'))?($errors->first('password')):''}}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password" value="{{ old('password_confirmation') }}">
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('password_confirmation'))?($errors->first('password_confirmation')):''}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
