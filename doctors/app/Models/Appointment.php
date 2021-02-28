<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function doctor(){
    	return $this->belongsTo(User::class,'doctor_id','id');
    }
    public function chamber(){
    	return $this->belongsTo(ChamberDetail::class,'chamber_id','id');
    }
    public function patient(){
    	return $this->belongsTo(User::class,'patient_id','id');
    }
}
