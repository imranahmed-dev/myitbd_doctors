<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\ChamberDetail;

class FrontendController extends Controller
{

    public function index()
    {
        $data['doctors'] = ChamberDetail::all();
    	return view('frontend.index',$data);
    }
    
    public function contact(){
        return view('frontend.contact');
    }
    public function coronatest(){
        return view('frontend.corona-test');
    }
    public function gallery(){
        return view('frontend.gallery');
    }
    public function patientregister(){
        return view('frontend.patient-register');
    }
    public function doctorregister(){
        return view('frontend.doctor-register');
    }
    
    public function userlogin(){
        return view('frontend.login');
    }
    
    public function registerindex(){
        return view('frontend.register-index');
    } 
    public function doctors(){
        $data['doctors'] = ChamberDetail::latest()->paginate(4);
        $data['doctorscount'] = ChamberDetail::count();
        return view('frontend.doctors',$data);
    }

}















