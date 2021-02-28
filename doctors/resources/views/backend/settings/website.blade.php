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
                                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <tbody>
                                       <tr>
                                           <th>Menu</th>
                                           <th>Information</th>
                                        </tr>
                                       
                                      <tr>
                                         <td>Company Name</td>
                                         <td> {{$value->companyname }}</td>
                                      </tr>
                                        
                                      <tr>
                                         <td>Company Sologan</td>
                                         <td>{{ $value->sologan }}</td>
                                       </tr>
                                        <tr>
                                         <td>Postal Code</td>
                                         <td>{{ $value->postcode }}</td>
                                       </tr>

                                        <tr>
                                         <td>Mobile Number</td>
                                         <td>{{ $value->mobile }}</td>
                                       </tr>  

                                       <tr>
                                         <td>hot Line Number</td>
                                         <td>{{ $value->hotlinenumber }}</td>
                                       </tr>
                                        <tr>
                                         <td>Email</td>
                                         <td>{{ $value->email }}</td>
                                       </tr>
                                        <tr>
                                         <td>Logo</td>
                                         <td><img src="{{ asset($value->logo)}}" alt="Logo" width="100px"></td>
                                       </tr>  

                                       <tr>
                                         <td>Footer Logo</td>
                                         <td><img src="{{  asset($value->footerlogo) }}" alt="Footer Logo" width="100px"></td>
                                       </tr>
                                        <tr>
                                         <td>Banner Image</td>
                                         <td> <img src="{{  asset($value->banner) }}" alt="Banner" width="100px"> </td>
                                       </tr>
                                        <tr>
                                         <td>Local Address</td>
                                         <td>{{ $value->localaddress }}</td>
                                       </tr>
                                       <tr>
                                         <td>State Address</td>
                                         <td>{{ $value->stateaddress }}</td>
                                       </tr><tr>
                                         <td>Action  </td>
                                         <td> <a href="{{ route('setting.edit') }}" class="btn btn-xs btn-success form-control"><i class="fa fa-edit"></i> Edit</a> </td>
                                       </tr>
                  
                                   
                                      
                                      
                                      </tbody>

                          
                                    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
