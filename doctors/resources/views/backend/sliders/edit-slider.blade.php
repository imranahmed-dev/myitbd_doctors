@extends('layouts.app')
@section('title','Add Sliders')
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
                <h5 class="d-block">Edit Slider
                    <a href="{{route('slider.index')}}" class="btn btn-info btn-sm float-right">Slider List</a>
                </h5>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-sm-8">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{route('slider.update',$editdata->id)}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" placeholder="Title" class="form-control" value="{{$editdata->title}}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" name="description" placeholder="Description" class="form-control" value="{{$editdata->description}}">
                            </div>
                            <div class="form-group">
                                <label for="">Link</label>
                                <input type="text" name="link" placeholder="Link" class="form-control"
                                 value="{{$editdata->link}}">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img width="80" class="mt-2" src="{{asset($editdata->image)}}" alt="image">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Update" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
