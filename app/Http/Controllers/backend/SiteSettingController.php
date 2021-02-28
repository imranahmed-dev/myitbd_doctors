<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use Validator;

class SiteSettingController extends Controller
{
     public function index()
     {

     	$data['value'] = SiteSetting::find(1);
     	return view('backend.settings.website',$data);

     }

     public function edit()
     {
     	$data['setting'] = SiteSetting::find(1);
     	return view('backend.settings.edit',$data);
     }



     public function update(Request $request)
     {
     	 $validator = Validator::make($request->all(), [
            'logo' => 'mimes:jpeg,jpg,png',
            'footerlogo' => 'mimes:jpeg,jpg,png'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

           $data = SiteSetting::find(1);
            
            $header_logo = $request->file('logo');
            if($header_logo){
                $uniqname = uniqid();
                $ext = strtolower($header_logo->getClientOriginalExtension());
                $filepath = 'public/images/settings/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $header_logo->move($filepath,$imagename);
                $data['logo'] = $imagename;
          }
            
         	$footer_logo = $request->file('footerlogo');
           
           if($footer_logo){
                $uniqname = uniqid();
                $ext = strtolower($footer_logo->getClientOriginalExtension());
                $filepath = 'public/images/settings/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $footer_logo->move($filepath,$imagename);
                $data['footerlogo'] = $imagename;
            }
            
         	$banner = $request->file('banner');
           
          	if($banner){
                $uniqname = uniqid();
                $ext = strtolower($banner->getClientOriginalExtension());
                $filepath = 'public/images/settings/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $banner->move($filepath,$imagename);
                $data['banner'] = $imagename;
          	}
            
            $data->companyname  = $request->companyname;
            $data->sologan      = $request->sologan;
            $data->postcode     = $request->postcode;
            $data->mobile       = $request->mobile;
            $data->hotlinenumber= $request->hotlinenumber;
            $data->email        = $request->email;
            $data->localaddress = $request->localaddress;
            $data->stateaddress = $request->stateaddress;
            $data->mapcode      = $request->mapcode;
            $data->status       = 1;
            $data->save();
            
	          $notification = array(
	            'message' => 'Successfully setting updated!',
	            'alert-type' => 'success'
	          );
        	return redirect()->route('setting.index')->with($notification);
        }


     }


}
