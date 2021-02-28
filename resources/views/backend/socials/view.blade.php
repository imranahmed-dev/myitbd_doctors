@extends('layouts.app')
@section('title','Social Media List')
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
                        <h5>Social Media</h5>
                        <a href="{{ route('social.create') }}" class="float-right btn btn-primary btn-sm">Add New</a>
                    </div>
                    <div class="card-block">
                        <div class="row">
                              <table id="datatable-buttons" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Icon</th>
                            <th>link</th>
                            
                            <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
                        @php
                        $i =1;
                        @endphp
                        @foreach($socialmedias as $socialmedia)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $socialmedia->name }}</td>
                            
                            <td>{{ $socialmedia->icon }}</td>
                            <td>{{ $socialmedia->link }}</td>
                            
                            <td>
                                 
                                <a href="{{ route('social.destroy',$socialmedia->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete this item!')">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </td>
 
                             
                        </tr>
                        @endforeach
 

                    </tbody>
                    <tfoot>
                       <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Icon</th>
                            <th>link</th>
                          
                            <th>Action</th>
                         </tr>
                    </tfoot>
                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
