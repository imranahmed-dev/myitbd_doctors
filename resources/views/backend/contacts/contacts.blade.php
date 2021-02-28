@extends('layouts.app')
@section('title','Contacts')
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
                        <h5>Contacts List</h5>
                        <a href="" class="float-right btn btn-primary btn-sm" data-toggle="modal" data-target="#add_admin">Add New</a>
 
                    </div>
                    <div class="card-block">
                        <div class="row">
                              <table id="datatable-buttons" class="table table-striped table-bordered nowrap">
			                    <thead>
			                        <tr>
			                            <th>Serial</th>
			                            <th>Name</th>
			                            <th>email</th>
			                            <th>Message</th>
			                            <th>Create Date</th>
			                           
			                         </tr>
			                    </thead>
			                    <tbody>
			                        @foreach($contacts as $contact)
			                        <tr>
			                        	<td>   {{ $loop->iteration }}</td>
			                        	<td>   {{ $contact->name }}</td>
			                        	<td>   {{ $contact->email }}</td>
			                    
			                        	<td>	{{ $contact->message  }}</td>
			                        	<td>	{{ $contact->created_at  }}</td>
			                        	 
			                        </tr>

			                        @endforeach
			 

			                    </tbody>
			                    <tfoot>
			                         <tr>
			                            <th>Serial</th>
			                            <th>Name</th>
			                            <th>email</th>
			                            <th>Message</th>
			                            <th>Create Date</th>
			                           
			                         </tr>
			                    </tfoot>
			                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
