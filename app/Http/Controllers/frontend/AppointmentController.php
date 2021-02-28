<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Appointment;
use App\Models\ChamberDetail;
use App\User;

class AppointmentController extends Controller
{
    public function appointstore(Request $request, $id){
        if(Auth::check() && Auth::user()->usertype == 2){
            
            $chamber = ChamberDetail::where('id', $id)->first();
            $doctor = User::where('id',$chamber->doctor->id)->first();
            $doctor_id = $doctor->id;
            
            $data = new Appointment;
            $data->doctor_id = $doctor_id;
            $data->chamber_id = $id;
            $data->patient_id = Auth::user()->id;
            
            /*Order Number*/
            $chamberData = Appointment::where('doctor_id',$doctor_id)->where('chamber_id',$id)->count();
            if($chamberData == null){
                $firstReg = '0';
                $serial_no = $firstReg+1;
            }else{
                $chamberData = Appointment::where('doctor_id',$doctor_id)->where('chamber_id',$id)->orderBy('id','desc')->first()->serialno;
                $serial_no = $chamberData+1;
            }
             $data->serialno = $serial_no;
            
            $data->save();

            
            return redirect()->route('appoint.success');
            
            
        }elseif(Auth::check() && Auth::user()->usertype == 1){
            $notification = array(
                'message' => 'You are not a patient!',
                'alert-type' => 'error'
             );
            
            return redirect()->back()->with($notification);
        }elseif(Auth::check() && Auth::user()->usertype == 3){
            $notification = array(
                'message' => 'You are not a patient!',
                'alert-type' => 'error'
             );
            
            return redirect()->back()->with($notification);
            
        }elseif(Auth::check() && Auth::user()->usertype == 4){
            $notification = array(
                'message' => 'You are not a patient!',
                'alert-type' => 'error'
             );
            
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Please login first!',
                'alert-type' => 'info'
             );
            
            return redirect()->route('userlogin')->with($notification);
        }
    }
    
    public function appointsuccess(){
        $id = Auth::user()->id;
        $data['appointment'] = Appointment::where('patient_id', $id)->latest()->first();
        return view('frontend.appoint-success',$data);
    }
}
