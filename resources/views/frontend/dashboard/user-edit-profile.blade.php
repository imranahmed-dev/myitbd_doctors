@extends('frontend.dashboard.dashboard-master')
@section('title','Edit Profile')
@section('dashboard')

<style>
    .customer-ppn img {
        background: #fff;
        height: 120px;
        width: 120px;
        border-radius: 50%;
        padding: 3px;
        border: 1px solid #ddd;
    }

    .table th,
    .table td {
        padding-left: 15px;
    }

</style>
<div class="col-md-10">
    <div class="customer-dashboard-body card">
        <div class="card-header">
            <h5 class="m-0">My Profile</h5>
        </div>
        <!--customer profile area-->
        <div class="row">
            <div class="col">
                <div class="customer-ppn" style="background: linear-gradient(rgba(0, 0, 0, 0.45),rgba(0, 0, 0, 0.45)), url({{asset('public/frontend/css/photos/profilebg.jpg')}});">
                    <div class="customer-pp pt-4 ml-5">
                        <img src="{{(!empty(Auth::user()->image))?url(Auth::user()->image):url('public/uploaded/user_default/avatar.jpg')}}" alt="">
                    </div>
                    <h4 class=" mt-1 pb-4" style="margin-left:36px;color:#fff;">{{Auth::user()->name}}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="customer-p-details">
                    <div class="card-body table-responsive pt-1">
                        <div class="p-about mb-3">
                            <a href="{{route('user.profile')}}" class="btn btn-success btn-sm"><i class="fa fa-info-circle"></i> About</a>
                            <a href="{{route('user.edit.profile')}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit Profile</a>
                            <a href="{{route('user.change.password')}}" class="btn btn-info btn-sm"><i class="fa fa-key"></i> Change Password</a>
                        </div>
                        <div class="pro-title mb-3">
                            <h5>Edit Profile</h5>
                        </div>
                        <form action="{{route('user.update.profile',Auth::user()->id)}}" method="post">
                           @csrf
                            <table class="table table-bordered table-striped table-sm">
                                <tr>
                                    <th width="20%">Name</th>
                                    <td>
                                    <input name="name" type="text" class="form-control" placeholder="Enter name" value="{{Auth::user()->name}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
                                    </td>
                                </tr>
                                @if(Auth::user()->usertype == 3)
                                <tr>
                                    <th width="20%">Designation</th>
                                    <td>
                                    <input name="designation" type="text" class="form-control" placeholder="Enter designation" value="{{Auth::user()->designation}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('designation'))?($errors->first('designation')):''}}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="20%">Degree</th>
                                    <td>
                                    <input name="degree" type="text" class="form-control" placeholder="Enter degree" value="{{Auth::user()->degree}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('degree'))?($errors->first('degree')):''}}</div>
                                    </td>
                                </tr>
                                @endif

                                @if(Auth::user()->usertype == 2)
                                <tr>
                                    <th>Age</th>
                                    <td>
                                    <input name="age" type="text" class="form-control" placeholder="Enter age" value="{{Auth::user()->age}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('age'))?($errors->first('age')):''}}</div>
                                    </td>
                                </tr>
                                @endif

                                <tr>
                                    <th>Email</th>
                                    <td>
                                    <input name="email" type="text" class="form-control" placeholder="Enter email" value="{{Auth::user()->email}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Mobile Number</th>
                                    <td>
                                    <input name="mobile" type="text" class="form-control" placeholder="Enter mobile" value="{{Auth::user()->mobile}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('mobile'))?($errors->first('mobile')):''}}</div>
                                    </td>
                                </tr>
                                @if(Auth::user()->usertype == 2 || Auth::user()->usertype == 3)
                                <tr>
                                    <th>Address</th>
                                    <td>
                                    <input name="address" type="text" class="form-control" placeholder="Enter address" value="{{Auth::user()->address}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('address'))?($errors->first('address')):''}}</div>
                                    </td>
                                </tr>
                                @endif
                                <tr>
                                   <td></td>
                                    <td><input class="btn btn-primary btn-sm" type="submit" value="Save Changes"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
