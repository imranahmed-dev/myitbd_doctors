<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\ChamberDetail;

class RegisterController extends Controller
{
     public function patientstore(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'age' => 'required',
            'mobile' => 'required|unique:users,mobile',
            'email' => 'required|unique:users,email',
            'address' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
        ]);
         
        $data = new User;
        $data->role = 2;
        $data->usertype = 2;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->age = $request->age;
        $data->address = $request->address;
        $data->password = bcrypt($request->password);

        $data->save();
        
        $notification = array(
            'message' => 'Registration Successfully!',
            'alert-type' => 'success'
             );
        return redirect()->back()->with($notification);
        
    }
    
    public function doctorstore(Request $request){
    
        $this->validate($request,[
            'name' => 'required',
            'mobile' => 'required|unique:users,mobile',
            'email' => 'required|unique:users,email',
            'address' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
         ]);
        
        $data = new User;
        $data->role = 2;
        $data->usertype = 3;
        $data->designation = $request->designation;
        $data->degree = $request->degree;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->password = bcrypt($request->password);
        $image = $request->file('certificate');
        if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/uploaded/doctor_certificate/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            $image->move($filepath,$imagename);
            $data->certificate = $imagename;
        }
           $data->save();
        
             $notification = array(
                'message' => 'Registration Successfully!',
                'alert-type' => 'success'
                     );
            return redirect()->back()->with($notification);
    }
}
