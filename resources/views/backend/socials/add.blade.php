@extends('layouts.app')
@section('title','Add New Social Media')
@section('content')
 

 <div class="page-wrapper">
        <div class="page-header">
            <div class="page-header-title">
                <h4>Add New Social Media</h4>
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
                        <h5>Add New Social Media</h5>
                        
                    </div>
                    <div class="card-block">
                        <form action="{{ route('social.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                           <div class="col-sm-12">
                             <div class="form-group">
                                <label class="col-sm-12 col-form-label"> Name :  </label>
                                <div class="col-sm-12">
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Social Media Name" required> 
                                    
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                              </div>
                           </div> 

                           <div class="col-sm-12">
                             <div class="form-group">
                                <label class="col-sm-12 col-form-label"> Icon :  </label>
                                <div class="col-sm-12">
                                    <input type="text" name="icon" value="{{ old('icon') }}" class="form-control" placeholder="Enter social Icon"> 
                                     
                                    <div class="text-danger">{{ $errors->first('icon') }}</div>
                                </div>
                              </div>
                           </div>

                           <div class="col-sm-12">
                             <div class="form-group">
                                <label class="col-sm-12 col-form-label"> Link :  </label>
                                <div class="col-sm-12">
                                    <input type="text" name="link" value="{{ old('link') }}" class="form-control" placeholder="Enter social link"> 
                                    
                                    <div class="text-danger">{{ $errors->first('link') }}</div>
                                </div>
                              </div>
                           </div>   
                                                           
                            <div class="col-sm-12">
                                 <div class="form-group">
                                   <div class="col-sm-9">
                                         <br>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                          </div>
                       </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
