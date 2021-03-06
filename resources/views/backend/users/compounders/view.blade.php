@extends('layouts.app')
@section('title','Compounders')
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
                        <h5>Compounders List</h5>
                        <a href="" class="float-right btn btn-primary btn-sm" data-toggle="modal" data-target="#add_admin">Add New</a>

 

								<!-- Modal -->
								<div class="modal fade" id="add_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								    <form action="{{ route('compounder.chamber.store') }}" method="post">
								    	@csrf
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Add New Compounders</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								           <div class="row">	
								           		<div class="col-md-6">	
								           			<div class="form-group">	
								           					<label for="	">name</label>
								           					<input type="text" name="name" placeholder="Enter your name" class="form-control"> 
								           			</div>	
								           		</div>
								           		<div class="col-md-6">	
								           			<div class="form-group">	
								           					<label for="	">Email</label>
								           					<input type="email" name="email" placeholder="Enter your email" class="form-control"> 
								           			</div>	
								           		</div>
								           		<div class="col-md-6">	
								           			<div class="form-group">	
								           					<label for="">Mobile</label>
								           					<input type="text" name="mobile" placeholder="Enter your mobile" class="form-control"> 
								           			</div>	
								           		</div>
								           		<div class="col-md-6">	
								           			<div class="form-group">	
								           					<label for="">Password</label>
								           					<input type="password" name="password" placeholder="Enter your password" class="form-control"> 
								           			</div>	
								           		</div>
								           		 
								           </div>	
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        <button type="submit" class="btn btn-primary">Save changes</button>
								      </div>
								      </form>
								    </div>
								  </div>
								</div>


                    </div>
                    <div class="card-block">
                        <div class="row">
                              <table id="datatable-buttons" class="table table-striped table-bordered nowrap">
			                    <thead>
			                        <tr>
			                            <th>Serial</th>
			                            <th>Doctors</th>
			                       
			                            <th>Name</th>
			                            <th>email</th>
			                            <th>Mobile</th>
			                            
			                            <th>Create Date</th>
			                            <th>Action</th>
			                         </tr>
			                    </thead>
			                    <tbody>
			                        @foreach($compounders as $user)
			                        <tr>
			                        	<td>{{ $loop->iteration }}</td>
			                        	<td>	{{ $user->doctor->name }}</td>
			                         
			                        	<td>	{{ $user->name }}</td>
			                        	<td>	{{ $user->mobile }}</td>
			                        	<td>	{{ $user->email  }}</td>
			                        	<td>	{{ $user->created_at  }}</td>
			                        	<td>	
			                        		<a href="" data-toggle="modal" data-target="#edit_admin_{{ $user->id }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
			                        		<a href="{{ route('admin.user.destroy',$user->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>





											<!-- Modal -->
											<div class="modal fade" id="edit_admin_{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											    <form action="{{ route('compounder.chamber.update',$user->id) }}" method="post">
											    	@csrf
											      <div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLabel">Edit Compounder</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>
											      <div class="modal-body">
											           <div class="row">	
											           		<div class="col-md-6">	
											           			<div class="form-group">	
											           					<label for="	">name</label>
											           					<input type="text" name="name" value="{{ $user->name }}" placeholder="Enter your name" class="form-control"> 
											           			</div>	
											           		</div>
											           		<div class="col-md-6">	
											           			<div class="form-group">	
											           					<label for="	">Email</label>
											           					<input type="email" name="email" value="{{ $user->email }}" placeholder="Enter your email" class="form-control"> 
											           			</div>	
											           		</div>
											           		<div class="col-md-6">	
											           			<div class="form-group">	
											           					<label for="">Mobile</label>
											           					<input type="text" name="mobile" value="{{ $user->mobile }}" placeholder="Enter your mobile" class="form-control"> 
											           			</div>	
											           		</div>
											           		<div class="col-md-6">	
											           			<div class="form-group">	
											           					<label for="">Password</label>
											           					<input type="password" name="password" placeholder="New password" class="form-control"> 
											           			</div>	
											           		</div>
											           		 
											           </div>	
											      </div>
											      <div class="modal-footer">
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											        <button type="submit" class="btn btn-primary">Save changes</button>
											      </div>
											      </form>
											    </div>
											  </div>
											</div>
			                        	</td>
			                        </tr>

			                        @endforeach
			 

			                    </tbody>
			                    <tfoot>
			                        <tr>
			                            <th>Serial</th>
			                            <th>Name</th>
			                            <th>email</th>
			                            <th>Mobile</th>
			                           
			                            <th>Create Date</th>
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
