@extends('frontend.dashboard.dashboard-master')
@section('title','Compounder List')
@section('dashboard')
<div class="col-md-10">
    <div class="customer-dashboard-body">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0"><i class="fa fa-list"></i> Compounder List <a href="{{route('create.compounder')}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus-circle"></i> Add More</a></h5>
            </div>
            <div class="card-body table-responsive text-nowrap">
                <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Chamber</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($compounders as $compounder)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$compounder->name}}</td>
                            <td>{{$compounder->mobile}}</td>
                            <td>{{$compounder->email}}</td>
                            <td>
                                <p class="mb-0">{{$compounder->compounderchamber->district}}, {{$compounder->compounderchamber->chamberaddress}}</p>
                            </td>
                            <td>
                               <a id="deleteData" class="btn btn-sm t btn-danger" href="{{route('compounder.delete',$compounder->id)}}"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
