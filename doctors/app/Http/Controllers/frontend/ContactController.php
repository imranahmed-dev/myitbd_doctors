<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $data = new Contact;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->save();
        
        $notification = array(
            'message' => 'Send Message Successfully!',
            'alert-type' => 'success'
             );
        return redirect()->back()->with($notification);
    }
}
