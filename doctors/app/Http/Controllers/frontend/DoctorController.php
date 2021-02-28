<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Models\ChamberDetail;
use App\Models\Appointment;

class DoctorController extends Controller
{
    public function all_patient(){
        $data['patients'] = Appointment::where('doctor_id', Auth::user()->id)->get();
        return view('frontend.dashboard.doctor.all-patient',$data);
    }
    public function pending_patient(){
        $data['patients'] = Appointment::where('doctor_id', Auth::user()->id)->where('status',1)->get();
        return view('frontend.dashboard.doctor.pending-patient',$data);
    }
    public function approved_patient(){
        $data['patients'] = Appointment::where('doctor_id', Auth::user()->id)->where('status',2)->get();
        return view('frontend.dashboard.doctor.approved-patient',$data);
    }
    public function rejected_patient(){
        $data['patients'] = Appointment::where('doctor_id', Auth::user()->id)->where('status',3)->get();
        return view('frontend.dashboard.doctor.rejected-patient',$data);
    }
    public function visited_patient(){
        $data['patients'] = Appointment::where('doctor_id', Auth::user()->id)->where('status',4)->get();
        return view('frontend.dashboard.doctor.visited-patient',$data);
    }
    
    
    public function create_compounder(){
        $data['chamberaddress'] = ChamberDetail::where('doctor_id',Auth::user()->id)->get();
        return view('frontend.dashboard.doctor.create-compounder',$data);
    }
    public function chambers(){
        $data['chambers'] = ChamberDetail::where('doctor_id',Auth::user()->id)->get();
        return view('frontend.dashboard.doctor.chamber-list',$data);
    }
    
    public function compounder_store(Request $request){
        $this->validate($request,[
            'chamber' => 'required',
            'name' => 'required',
            'mobile' => 'required|unique:users,mobile',
            'email' => 'required|unique:users,email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
        ]);
         
        $data = new User;
        $data->role = 2;
        $data->usertype = 4;
        $data->doctor_id = Auth::user()->id;
        $data->chamber_id = $request->chamber;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->password = bcrypt($request->password);

        $data->save();
        
        $notification = array(
            'message' => 'Compounder Created Successfully!',
            'alert-type' => 'success'
             );
        return redirect()->back()->with($notification);
    }
    
    public function compounder_list(){
        $data['compounders'] = User::where('doctor_id',Auth::user()->id)->get();
        return view('frontend.dashboard.doctor.compounder-list',$data);
    }
    public function patient_status(Request $request, $id){
        $data = Appointment::find($id);
        $data->status = $request->status;
        $data->save();
        
        $notification = array(
            'message' => 'Status Change Successfully!',
            'alert-type' => 'success'
             );
        return redirect()->back()->with($notification);
    }
    public function patient_delete($id){
        $data = Appointment::find($id);
        $data->delete();
        
        $notification = array(
            'message' => 'Successfully Patient Deleted!',
            'alert-type' => 'success'
             );
        return redirect()->back()->with($notification);
    }
    public function compounder_delete($id){
        $data = User::find($id);
        $data->delete();
        
        $notification = array(
            'message' => 'Successfully Compounder Deleted!',
            'alert-type' => 'success'
             );
        return redirect()->back()->with($notification);
    }
    public function chamber_delete($id){
        $data = ChamberDetail::find($id);
        $data->delete();
        
        $notification = array(
            'message' => 'Successfully Chamber Deleted!',
            'alert-type' => 'success'
             );
        return redirect()->back()->with($notification);
    }
    
    public function chamber_patient($id){
        $data['patients'] = Appointment::where('doctor_id', Auth::user()->id)->where('chamber_id',$id)->latest()->get();
        return view('frontend.dashboard.doctor.chamber-patient',$data);
    }
    
    public function chamber_add(){
        return view('frontend.dashboard.doctor.add-chamber');
    }
    public function chamber_store(Request $request){
        $this->validate($request,[
            'specialist' => 'required',
            'district' => 'required',
            'chamberaddress' => 'required',
            'date' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
        ]);
         
        $data = new ChamberDetail;
        
        $data->doctor_id = Auth::user()->id;
        $data->specialist = $request->specialist;
        $data->district = $request->district;
        $data->chamberaddress = $request->chamberaddress;
        $data->date = $request->date;
        $data->starttime = $request->starttime;
        $data->endtime = $request->endtime;

        $data->save();
        
        $notification = array(
            'message' => 'Chamber Created Successfully!',
            'alert-type' => 'success'
             );
        return redirect()->route('chambers')->with($notification);
    }
    
    public function chamber_edit($id){
        $data['editdata'] = ChamberDetail::find($id);
        return view('frontend.dashboard.doctor.edit-chamber',$data);
    }
    
    public function chamber_update(Request $request, $id){
        $this->validate($request,[
            'specialist' => 'required',
            'district' => 'required',
            'chamberaddress' => 'required',
            'date' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
        ]);
         
        $data = ChamberDetail::find($id);
        
        $data->specialist = $request->specialist;
        $data->district = $request->district;
        $data->chamberaddress = $request->chamberaddress;
        $data->date = $request->date;
        $data->starttime = $request->starttime;
        $data->endtime = $request->endtime;

        $data->save();
        
        $notification = array(
            'message' => 'Chamber Updated Successfully!',
            'alert-type' => 'success'
             );
        return redirect()->route('chambers')->with($notification);
    }
    
    
    
    
    
    
    
}
