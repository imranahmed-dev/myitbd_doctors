@extends('layouts.app')
@section('title','')
@section('content')
 

 <div class="page-wrapper">
        <div class="page-header">
            <div class="page-header-title">
                <h4></h4>
            </div>
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">
                            <i class="icofont icofont-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!"> </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page-body">
             
                <!-- Input Group Sizes & Colors card start -->
                <div class="card">
                    <div class="card-header">
                        <h5></h5>
                        
                    </div>
                    <div class="card-block">
                        <div class="row">
                <form action="{{route('setting.update')}}" method="post" enctype="multipart/form-data">
                       @csrf
                     <div class="col-sm-12">
                        <div class="form-group">
                            <label>Header Logo</label>
                            <input type="file" name="logo" class="form-control" value="{{old('logo')}}">
                            <div class="text-danger">{{ $errors->first('logo') }}</div>
                            <img style="margin-top: 10px" width="150" src="{{asset($setting->logo)}}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12">


                        <div class="form-group">
                            <label>Footer Logo</label>
                            <input type="file" name="footerlogo" class="form-control" value="{{old('footerlogo')}}">
                            <div class="text-danger">{{ $errors->first('footerlogo') }}</div>
                            <img style="margin-top: 10px" width="150" src="{{asset($setting->footerlogo)}}" alt="">
                        </div>
                         </div>
                    <div class="col-sm-12">
                        
                        <div class="form-group">
                            <label>Banner</label>
                            <input type="file" name="banner" class="form-control" value="{{old('banner')}}">
                            <div class="text-danger">{{ $errors->first('banner') }}</div>
                            <img style="margin-top: 10px" width="150" src="{{asset($setting->banner)}}" alt="">
                        </div>
                         </div>
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="companyname" class="form-control" value="{{$setting->companyname}}">
                            <div class="text-danger">{{ $errors->first('companyname') }}</div>
                        </div>
                         </div>
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label>Company Slogan</label>
                            <input type="text" name="sologan" class="form-control" value="{{$setting->sologan}}">
                            <div class="text-danger">{{ $errors->first('sologan') }}</div>
                        </div>
                         </div>
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label>Company Email</label>
                            <input type="text" name="email" class="form-control" value="{{$setting->email}}">
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                        </div>
                         </div>
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label>Company Mobile Number</label>
                            <input type="text" name="mobile" class="form-control" value="{{$setting->mobile}}">
                            <div class="text-danger">{{ $errors->first('mobile') }}</div>
                        </div>
                         </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Hotline Number</label>
                            <input type="text" name="hotlinenumber" class="form-control" value="{{$setting->hotlinenumber}}">
                            <div class="text-danger">{{ $errors->first('hotlinenumber') }}</div>
                        </div>
                     </div>
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label>Local Address</label>
                            <input type="text" name="localaddress" class="form-control" value="{{$setting->localaddress}}">
                            <div class="text-danger">{{ $errors->first('localaddress') }}</div>
                        </div>
                     </div>
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label>State Address</label>
                            <input type="text" name="stateaddress" class="form-control" value="{{$setting->stateaddress}}">
                            <div class="text-danger">{{ $errors->first('stateaddress') }}</div>
                        </div>
                     </div>  
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label>Post Code</label>
                            <input type="text" name="postcode" class="form-control" value="{{$setting->postcode}}">
                            <div class="text-danger">{{ $errors->first('postcode') }}</div>
                        </div>
                     </div>


                    <div class="col-sm-12">

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
