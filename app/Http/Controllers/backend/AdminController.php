<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::where('role',1)->get();
        return view('backend.users.admins.view',$data);
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
         $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email|required',
            'mobile' => 'required',
            'password' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $user = New User();
            $user->role = 1;
            $user->usertype = 1;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->password = bcrypt($request->password);
           
            $user->save();
            
              $notification = array(
                'message' => 'Successfully Account Create!',
                'alert-type' => 'success'
              );
            return redirect()->route('admin.user.index')->with($notification);
        }
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
         $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email|required',
            'mobile' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $user = User::find($id);
         

            $user->name   = $request->name;
            $user->email  = $request->email;
            $user->mobile = $request->mobile;
            if($request->password){
              $user->password = bcrypt($request->password);
            }
            $user->save();
            
              $notification = array(
                'message' => 'Successfully setting updated!',
                'alert-type' => 'success'
              );
            return redirect()->route('admin.user.index')->with($notification);
        }
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
        return redirect()->route('admin.user.index')->with($notification);
     }
}
