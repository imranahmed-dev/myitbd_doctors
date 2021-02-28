<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = Slider::all();
        return view('backend.sliders.view-slider',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sliders.add-slider');
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
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
         ]);

	        $data =  new Slider;
	        $data->title = $request->title;
	        $data->description =  $request->description;
	        $data->link =  $request->link;
	        $image = $request->file('image');
            if($image){
                 $uniqname = uniqid();
                 $ext = strtolower($image->getClientOriginalExtension());
                 $filepath = 'public/images/sliders/';
                 $imagename = $filepath.$uniqname.'.'.$ext;
                 /*@unlink($data->photo);*/
                $image->move($filepath,$imagename);
                $data->image = $imagename;
            }
        
            $data->save();

             $notification = array(
                    'message' => 'Slider Added Successfully!',
                    'alert-type' => 'success'
             );

            return redirect()->route('slider.index')->with($notification);
               
          
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
        $data['editdata'] = Slider::find($id);
        return view('backend.sliders.edit-slider',$data);
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
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'mimes:jpeg,png,jpg',
         ]);

	        $data = Slider::find($id);
	        $data->title = $request->title;
	        $data->description =  $request->description;
	        $data->link =  $request->link;
	        $image = $request->file('image');
            if($image){
                 $uniqname = uniqid();
                 $ext = strtolower($image->getClientOriginalExtension());
                 $filepath = 'public/images/sliders/';
                 $imagename = $filepath.$uniqname.'.'.$ext;
                 @unlink($data->photo);
                 $image->move($filepath,$imagename);
                 $data->image = $imagename;
           }
        
            $data->save();

             $notification = array(
                    'message' => 'Slider Updated Successfully!',
                    'alert-type' => 'success'
             );

            return redirect()->route('slider.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Slider::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Slider Deleted Successfully!',
            'alert-type' => 'success'
         );

        return redirect()->back()->with($notification);
        
    }
}
