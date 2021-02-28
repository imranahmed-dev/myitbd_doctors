@extends('frontend.dashboard.dashboard-master')
@section('title','Add Chamber')
@section('dashboard')
<div class="col-md-10">
    <div class="customer-dashboard-body">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0"><i class="fa fa-plus-circle"></i> Add Chamber <a href="{{route('chambers')}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus-circle"></i> Chamber List</a></h5>
            </div>
            <div class="card-body table-responsive text-nowrap">
                <form action="{{route('chamber.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="row">
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
                                    <select class="browser-default form-control" name="district">
                                        <option value=" ">Select Discrict</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Gazipur">Gazipur</option>
                                    </select>
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
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
