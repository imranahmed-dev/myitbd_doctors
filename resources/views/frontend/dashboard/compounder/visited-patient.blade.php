@extends('frontend.dashboard.dashboard-master')
@section('title','Visited Patient')
@section('dashboard')
<div class="col-md-10">
    <div class="customer-dashboard-body">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0">Visited Patient</h5>
            </div>
            <div class="card-body table-responsive text-nowrap">
                <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Chamber Address</th>
                            <th>Serial No</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patients as $patient)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$patient->patient->name}}</td>
                            <td>{{$patient->patient->mobile}}</td>
                            <td>{{$patient->patient->address}}</td>
                            <td>{{$patient->chamber->district}}, {{$patient->chamber->chamberaddress}}</td>
                            <td>#{{$patient->serialno}}</td>
                            <td>{{$patient->chamber->date}}</td>
                            <td>{{$patient->chamber->starttime}} - {{$patient->chamber->endtime}}</td>
                            <td>
                                @if($patient->status == 1)
                                <span class="badge badge-danger">Pending</span>
                                @elseif($patient->status == 2)
                                <span class="badge badge-success">Approved</span>
                                @elseif($patient->status == 3)
                                <span class="badge badge-danger">Rejected</span>
                                @elseif($patient->status == 4)
                                <span class="badge badge-success">Visited</span>
                                @endif

                            </td>
                            <td>
                                <center>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#patientstatus">
                                       <i class="fa fa-refresh"></i> Status
                                    </button>
                                </center>
                            </td>
                        </tr>
                        @section('modal')
                        <!-- Modal -->
                        <div class="modal fade" id="patientstatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header p-2 bg-light">
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$patient->patient->name}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{route('patient.status',$patient->id)}}" method="post">
                                       @csrf
                                        <div class="modal-body">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="1" @if( $patient->status == 1 ) selected @endif >Pending</option>
                                                <option value="2" @if( $patient->status == 2 ) selected @endif >Approved</option>
                                                <option value="3" @if( $patient->status == 3 ) selected @endif >Reject</option>
                                                <option value="4" @if( $patient->status == 4 ) selected @endif >Visited</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endsection

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
