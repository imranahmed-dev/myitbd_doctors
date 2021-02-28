<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Models\ChamberDetail;
use Validator;

class ChamberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->doctor_id)
        {
            $data['chambersdetails'] = ChamberDetail::where('doctor_id',$request->doctor_id)->get();
        }
        else{
            $data['chambersdetails'] = ChamberDetail::all();
        }
        $data['doctors'] = User::where('role',2)->where('usertype',3)->get();

        return view('backend.users.chambers.view',$data);
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
            'specialist' => 'required',
            'district' => 'required',
            'chamberaddress' => 'required',
            'date' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
                $data = new ChamberDetail;
                
                $data->doctor_id = $request->doctor_id;
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
                return redirect()->route('doctor.chamber.index')->with($notification);

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
            'specialist' => 'required',
            'district' => 'required',
            'chamberaddress' => 'required',
            'date' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
                $data =  ChamberDetail::find($id);
                
                $data->doctor_id = $request->doctor_id;
                $data->specialist = $request->specialist;
                $data->district = $request->district;
                $data->chamberaddress = $request->chamberaddress;
                $data->date = $request->date;
                $data->starttime = $request->starttime;
                $data->endtime = $request->endtime;

                $data->save();
                
                $notification = array(
                    'message' => 'Chamber update Successfully!',
                    'alert-type' => 'success'
                     );
                return redirect()->route('doctor.chamber.index')->with($notification);

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
        ChamberDetail::find($id)->delete();


        $notification = array(
                'message' => 'Successfully chambers Delete',
                'alert-type' => 'success'
              );
        return redirect()->route('chamber.index')->with($notification);
    }
}
