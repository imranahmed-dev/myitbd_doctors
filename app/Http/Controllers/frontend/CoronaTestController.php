<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CoronaTest;
use Session;

class CoronaTestController extends Controller
{
    public function store(Request $request){
        
         $this->validate($request,[
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ]);
        
        $data = new CoronaTest;
        
        $data->name                  = $request->name;
        $data->age                   = $request->age;
        $data->address               = $request->address;
        $data->mobile                = $request->mobile;
        $data->jor                   = $request->jor;
        $data->sordi                 = $request->sordi;
        $data->kashi                 = $request->kashi;
        $data->golabetha             = $request->golabetha;
        $data->shaskosto             = $request->shaskosto;
        $data->bomi                  = $request->bomi;
        $data->bukebetha             = $request->bukebetha;
        $data->sadnapawa             = $request->sadnapawa;
        $data->protibeshi_akranto    = $request->protibeshi_akranto;
        $data->poribar_akranto       = $request->poribar_akranto;
        $data->poribar_jor_kashi     = $request->poribar_jor_kashi;
        
        $result = $request->jor + $request->sordi + $request->kashi + $request->golabetha + $request->shaskosto + $request->bomi + $request->bukebetha + $request->sadnapawa + $request->protibeshi_akranto + $request->poribar_akranto + $request->poribar_jor_kashi;
        
        $data->result                    =  $result;
        
        $data->save();
        
        Session::put('coronatestId', $data->id);
        
        return redirect()->route('corona.result');
        
    }
    
    public function result(){
    
        $coronatestId = Session::get('coronatestId');
        $data['coronaresult'] = CoronaTest::where('id',$coronatestId)->first();
        return view('frontend.corona-result',$data);
        
    }
}
