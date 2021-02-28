@extends('layouts.app')
@section('title','Sliders')
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
                <h5 class="d-block">Sliders
                    <a href="{{route('slider.create')}}" class="btn btn-info btn-sm float-right">Add More</a>
                </h5>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered">
                                <tr>
                                    <th>SL</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img width="70" src="{{asset($row->image)}}" alt="image"></td>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->description }}</td>
                                    <td>{{ $row->link }}</td>
                                    <td>
                                        <a href="{{route('slider.edit',$row->id)}}" class="btn btn-info btn-mini"><i class="fa fa-check"></i> Edit</a>

                                        <a id="delete" href="{{route('slider.destroy',$row->id)}}" class="btn btn-danger btn-mini"><i class="fa fa-check"></i> Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
