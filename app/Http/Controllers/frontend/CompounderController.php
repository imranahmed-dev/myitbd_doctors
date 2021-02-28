<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Models\ChamberDetail;
use App\Models\Appointment;

class CompounderController extends Controller
{
    public function compounder_all_patient(){
        $data['patients'] = Appointment::where('doctor_id', Auth::user()->doctor_id)->where('chamber_id', Auth::user()->chamber_id)->get();
        return view('frontend.dashboard.compounder.all-patient',$data);
    }
    public function compounder_pending_patient(){
        $data['patients'] = Appointment::where('doctor_id', Auth::user()->doctor_id)->where('chamber_id', Auth::user()->chamber_id)->where('status',1)->get();
        return view('frontend.dashboard.compounder.pending-patient',$data);
    }
    public function compounder_approved_patient(){
        $data['patients'] = Appointment::where('doctor_id', Auth::user()->doctor_id)->where('chamber_id', Auth::user()->chamber_id)->where('status',2)->get();
        return view('frontend.dashboard.compounder.approved-patient',$data);
    }
    public function compounder_rejected_patient(){
        $data['patients'] = Appointment::where('doctor_id', Auth::user()->doctor_id)->where('chamber_id', Auth::user()->chamber_id)->where('status',3)->get();
        return view('frontend.dashboard.compounder.rejected-patient',$data);
    }
    public function compounder_visited_patient(){
        $data['patients'] = Appointment::where('doctor_id', Auth::user()->doctor_id)->where('chamber_id', Auth::user()->chamber_id)->where('status',4)->get();
        return view('frontend.dashboard.compounder.visited-patient',$data);
    }
}
