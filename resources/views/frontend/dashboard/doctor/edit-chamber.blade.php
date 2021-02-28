@extends('frontend.dashboard.dashboard-master')
@section('title','Edit Chamber')
@section('dashboard')
<div class="col-md-10">
    <div class="customer-dashboard-body">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0"><i class="fa fa-plus-circle"></i> Edit Chamber  <a href="{{route('chambers')}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus-circle"></i> Chamber List</a></h5>
            </div>
            <div class="card-body table-responsive text-nowrap">
                <form action="{{route('chamber.update',$editdata->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Specialist</label>
                                    <input type="text" class="form-control" name="specialist" id="mobile" placeholder="Specialist" value="{{$editdata->specialist}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('specialist'))?($errors->first('specialist')):''}}</div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">District</label>
                                    <select class="browser-default form-control" name="district">
                                        <option value="">Select Discrict</option>
                                        <option value="Dhaka" @if($editdata->district == "Dhaka") selected @endif>Dhaka</option>
                                        <option value="Gazipur" @if($editdata->district == "Gazipur") selected @endif>Gazipur</option>
                                    </select>
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('district'))?($errors->first('district')):''}}</div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Chamber Address</label>
                                    <input type="text" class="form-control" name="chamberaddress"  placeholder="Chamber Address" value="{{$editdata->chamberaddress}}">

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('chamberaddress'))?($errors->first('chamberaddress')):''}}</div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Date</label>
                                    <input type="text" class="form-control" name="date" placeholder="Ex: Saturday - Tuesday" value="{{$editdata->date}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('date'))?($errors->first('date')):''}}</div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Start Time</label>
                                    <input type="time" class="form-control" name="starttime" value="{{$editdata->starttime}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('starttime'))?($errors->first('starttime')):''}}</div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">End Time</label>
                                    <input type="time" class="form-control" name="endtime" value="{{$editdata->endtime}}">
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
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
