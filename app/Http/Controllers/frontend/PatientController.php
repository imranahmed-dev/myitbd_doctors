<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Models\ChamberDetail;
use App\Models\Appointment;

class PatientController extends Controller
{
    public function patient_all_serial(){
        
        $data['serials'] = Appointment::where('patient_id', Auth::user()->id)->latest()->get();
        return view('frontend.dashboard.patient.all-serial',$data);
    }
    public function patient_visited_serial(){
        
        $data['serials'] = Appointment::where('patient_id', Auth::user()->id)->where('status',4)->latest()->get();
        return view('frontend.dashboard.patient.visited-serial',$data);
    }
}
