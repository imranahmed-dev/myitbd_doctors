<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;
use Validator;
use Auth;

class SocialMediaController extends Controller
{
    public function index()
    {
       $data['socialmedias'] = SocialMedia::orderBy('id','DESC')->where([['status',1]])->get();
         return view('backend.socials.view',$data);
    }

    public function create()
    {
         return view('backend.socials.add');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'link' => 'required',
            'icon' => 'required'       
        ]);

        if ($validator->fails()){
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{

            $socialmedia = New SocialMedia;

            $socialmedia->name = $request->name;
            $socialmedia->icon = $request->icon;
            $socialmedia->link = $request->link;  
            $socialmedia->status =1;
            $socialmedia->is_admin = Auth::user()->id;
            $socialmedia->is_delete = 0;
            $socialmedia->save();


            $notification = array(
	            'message' => 'Social media Add Successfully',
	            'alert-type' => 'success'
	         );
        	return redirect()->route('social.index')->with($notification);

        } /*validator ending*/
    }


    public function destroy($id)
    {

        SocialMedia::find($id)->delete();

        $notification = array(
            'message' => 'Social media delete Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('social.index')->with($notification);  

    }



}
