<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Model;

class ChamberDetail extends Model
{
    public function doctor(){
    	return $this->belongsTo(User::class,'doctor_id','id');
    }
}
