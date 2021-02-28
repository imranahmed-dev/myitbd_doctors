@extends('layouts.app')
@section('title','Chambers List')
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
                        <h5>Chambers List</h5>
                        <a href="" class="float-right btn btn-primary btn-sm" data-toggle="modal" data-target="#add_admin">Add New</a>
                        	<form action="">
		                        <div class="row">
		                        	<div class="col-md-4">
		                        		<select name="" id="" class="form-control">
				 							<option value="">Select Doctors</option>
				 							@foreach($doctors as $doctor)
				 							<option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
				 							@endforeach
				 						</select>
		                        	</div>
		                        	<div class="col-md-4">
		                        		<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
		                        	</div>
		                        </div>
                          </form>
 						

									<!-- Modal -->
							<div class="modal fade" id="add_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							    <form action="{{route('doctor.chamber.store')}}" method="post">
						         @csrf
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Add New Doctor Chambers</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							             
						                    <div class="row">
						                        <div class="col">
						                            <div class="row">
						                                <div class="col-md-6 form-group">
						                                    <label for="">Doctors</label>
						                                    <select name="doctor_id" class="form-control">
						                                        <option value="" class="d-none">Select Doctors</option>
						                                        @foreach($doctors as $doctor)
						                                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
						                                        @endforeach
						                                         
						                                    </select>
						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('specialist'))?($errors->first('specialist')):''}}</div>
						                                </div>

						                                <div class="col-md-6 form-group">
						                                    <label for="">Specialist</label>
						                                    <select name="specialist" class="form-control">
						                                        <option value="" class="d-none">Specialist</option>
						                                        <option value="মনোরোগ বিশেষজ্ঞ">মনোরোগ বিশেষজ্ঞ</option>
						                                        <option value="হৃদরোগ বিশেষজ্ঞ">হৃদরোগ বিশেষজ্ঞ</option>
						                                        <option value="নাক, কান ও গলা বিশেষজ্ঞ">নাক, কান ও গলা বিশেষজ্ঞ</option>
						                                        <option value="স্নায়ু রোগ বিশেষজ্ঞ">স্নায়ু রোগ বিশেষজ্ঞ</option>
						                                        <option value="হাড় জোড়া, বাত ব্যাথা ও পঙ্গু রোগ বিশেষজ্ঞ">হাড় জোড়া, বাত ব্যাথা ও পঙ্গু রোগ বিশেষজ্ঞ</option>
						                                        <option value="কিডনীরোগ বিশেষজ্ঞ">কিডনীরোগ বিশেষজ্ঞ</option>
						                                        <option value="সার্জারি বিশেষজ্ঞ">সার্জারি বিশেষজ্ঞ</option>
						                                    </select>
						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('specialist'))?($errors->first('specialist')):''}}</div>
						                                </div>
						                                <div class="col-md-6 form-group">
						                                    <label for="">District</label>
						                                    <input type="text" name="district" class="form-control" placeholder="Enter District Name">
						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('district'))?($errors->first('district')):''}}</div>
						                                </div>
						                                <div class="col-md-6 form-group">
						                                    <label for="">Chamber Address</label>
						                                    <input type="text" class="form-control" name="chamberaddress" placeholder="Chamber Address">

						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('chamberaddress'))?($errors->first('chamberaddress')):''}}</div>
						                                </div>
						                                <div class="col-md-6 form-group">
						                                    <label for="">Date</label>
						                                    <input type="text" class="form-control" name="date" placeholder="Ex: Saturday - Tuesday">
						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('date'))?($errors->first('date')):''}}</div>
						                                </div>
						                                <div class="col-md-6 form-group">
						                                    <label for="">Start Time</label>
						                                    <input type="time" class="form-control" name="starttime">
						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('starttime'))?($errors->first('starttime')):''}}</div>
						                                </div>
						                                <div class="col-md-6 form-group">
						                                    <label for="">End Time</label>
						                                    <input type="time" class="form-control" name="endtime">
						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('endtime'))?($errors->first('endtime')):''}}</div>
						                                </div>
						                            </div>
						                        </div>
						                    </div>
						                    <div class="row">
						                        <div class="col">
						                            <input type="submit" value="Submit" class="btn btn-primary">
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
                        	<div class="table-responsive">
                              <table id="datatable-buttons" class="table table-striped table-bordered nowrap">
			                    <thead>
			                        <tr>
			                            <th>Serial</th>
			                            <th>Doctors List</th>
			                            <th>Specialist</th>
			                            <th>district</th>
			                            <th>chamberaddress</th>
			                            <th>date</th>
			                            <th>starttime</th>
			                            <th>endtime</th>
			                            <th>Create Date</th>
			                            <th>Action</th>
			                         </tr>
			                    </thead>
			                    <tbody>

			                    	@foreach($chambersdetails as $chambers)
			                        	<tr>
			                        		<td>{{ $loop->iteration }}</td>
			                        		<td>{{ $chambers->doctor->name }}</td>
			                        		<td>{{ $chambers->specialist }}</td>
			                        		<td>{{ $chambers->district }}</td>
			                        		<td>{{ $chambers->chamberaddress }}</td>
			                        		<td>{{ $chambers->date }}</td>
			                        		<td>{{ $chambers->starttime }}</td>
			                        		<td>{{ $chambers->endtime }}</td>
			                        		<td>{{ $chambers->created_at }}</td>
			                        		<td>
			                        			<a href="" data-toggle="modal" data-target="#edit_chamber_{{ $chambers->id }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
			                        		
			                        		    <a href="{{ route('doctor.chamber.destroy',$chambers->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>








									<!-- Modal -->
							<div class="modal fade" id="edit_chamber_{{ $chambers->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							    <form action="{{route('doctor.chamber.update',$chambers->id)}}" method="post">
						         @csrf
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Add New Doctor Chambers</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							             
						                    <div class="row">
						                        <div class="col">
						                            <div class="row">
						                                <div class="col-md-6 form-group">
						                                    <label for="">Doctors</label>
						                                    <select name="doctor_id" class="form-control">
						                                        <option value="" class="d-none">Select Doctors</option>
						                                        @foreach($doctors as $doctor)
						                                        <option {{ $doctor->id == $chambers->doctor_id ? 'selected' : '' }} value="{{ $doctor->id }}">{{ $doctor->name }}</option>
						                                        @endforeach
						                                         
						                                    </select>
						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('specialist'))?($errors->first('specialist')):''}}</div>
						                                </div>

						                                <div class="col-md-6 form-group">
						                                    <label for="">Specialist</label>
						                                    <input type="text" class="form-control" name="specialist" id="mobile" placeholder="Specialist" value="{{$chambers->specialist}}">
						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('specialist'))?($errors->first('specialist')):''}}</div>
						                                </div>
						                                <div class="col-md-6 form-group">
						                                    <label for="">District</label>
						                                     <input type="text" name="district" class="form-control" value="{{ $chambers->district }}" placeholder="Enter District Name">
						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('district'))?($errors->first('district')):''}}</div>
						                                </div>
						                                <div class="col-md-6 form-group">
						                                    <label for="">Chamber Address</label>
						                                    <input type="text" class="form-control" name="chamberaddress"  placeholder="Chamber Address" value="{{$chambers->chamberaddress}}">

						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('chamberaddress'))?($errors->first('chamberaddress')):''}}</div>
						                                </div>
						                                <div class="col-md-6 form-group">
						                                    <label for="">Date</label>
						                                    <input type="text" class="form-control" name="date" placeholder="Ex: Saturday - Tuesday" value="{{$chambers->date}}">
						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('date'))?($errors->first('date')):''}}</div>
						                                </div>
						                                <div class="col-md-6 form-group">
						                                    <label for="">Start Time</label>
						                                    <input type="time" class="form-control" name="starttime" value="{{$chambers->starttime}}">
						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('starttime'))?($errors->first('starttime')):''}}</div>
						                                </div>
						                                <div class="col-md-6 form-group">
						                                    <label for="">End Time</label>
						                                    <input type="time" class="form-control" name="endtime" value="{{$chambers->endtime}}">
						                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('endtime'))?($errors->first('endtime')):''}}</div>
						                                </div>
						                                
						                            </div>
						                        </div>
						                    </div>
						                    <div class="row">
						                        <div class="col">
						                            <input type="submit" value="Submit" class="btn btn-primary">
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
			                            <th>Doctors List</th>
			                            <th>Specialist</th>
			                            <th>district</th>
			                            <th>chamberaddress</th>
			                            <th>date</th>
			                            <th>starttime</th>
			                            <th>endtime</th>
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
        </div>
@endsection
