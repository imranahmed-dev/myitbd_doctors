<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Validator;

class DashboardController extends Controller
{
    public function user_dashboard(){
        return view('frontend.dashboard.dashboard');
    }

    public function user_profile(){
        return view('frontend.dashboard.user-profile');
    }
    public function user_edit_profile(){
        return view('frontend.dashboard.user-edit-profile');
    }
    public function user_profile_settings(){
        return view('frontend.dashboard.user-profile-settings');
    }
    
    public function user_update_profile(Request $request, $id){
        
        if(Auth::user()->usertype == 2){
            $this->validate($request,[
            'name' => 'required',
            'age' => 'required',
            'mobile' => 'required|unique:users,mobile,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
            'address' => 'required',

        ]);
        }
        if(Auth::user()->usertype == 3){
            $this->validate($request,[
            'name' => 'required',
            'designation' => 'required',
            'degree' => 'required',
            'mobile' => 'required|unique:users,mobile,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
            'address' => 'required',
        ]);
        }
        if(Auth::user()->usertype == 4){
            $this->validate($request,[
            'name' => 'required',
            'mobile' => 'required|unique:users,mobile,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
        ]);
        }
        
        $data = User::where('id', Auth::user()->id)->first();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
            
        $data->age = $request->age;
        $data->designation = $request->designation;
        $data->degree = $request->degree;
        $data->save();
        
        $notification = array(
            'message' => 'Successfully Profile Updated!',
            'alert-type' => 'success'
             );
        return redirect()->back()->with($notification);
        
        
        
    }
    public function user_change_password(){
        return view('frontend.dashboard.user-change-password');
    }
    
    public function user_update_password(Request $request){
            $this->validate($request,[
            'current_password' => 'required',
            'new_password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        if(Auth::attempt(['id' => Auth::user()->id, 'password' => $request->current_password])){
            $user = User::find(Auth::user()->id);
            $user->password = bcrypt($request->new_password);
            $user->save();
            $notification = array(
            'message' => 'Successfully password changed.',
            'alert-type' => 'success'
             );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
            'message' => 'Sorry! Your current password dost not match.',
            'alert-type' => 'error'
             );
            return redirect()->back()->with($notification);
        }
    }
}
