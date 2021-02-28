<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChamberDetail;

class SearchController extends Controller
{
    public function doctor_search(Request $request){
        
        $this->validate($request,[
            'district' => 'required',
            'specialist' => 'required',
        ]);
        
        $district = $request->get('district');
        $specialist = $request->get('specialist');

        $doctors = ChamberDetail::where('district', 'like', '%'.$district.'%')->where('specialist', 'like', '%'.$specialist.'%')->paginate(4);

        return view('frontend.doctors')->with('doctors',$doctors);
    }
}
