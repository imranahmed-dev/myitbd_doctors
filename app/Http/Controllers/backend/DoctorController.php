<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::where('role',2)->where('usertype',3)->get();
        return view('backend.users.doctors.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'name' => 'required',
            'mobile' => 'required|unique:users,mobile,'.$id,
            'email' => 'required|unique:users,email,'.$id,
            'address' => 'required',
         ]);
        
        $data = User::find($id);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         User::find($id)->delete();   

        $notification = array(
                'message' => 'Successfully user Delete',
                'alert-type' => 'success'
              );
        return redirect()->back()->with($notification);
    }
}
