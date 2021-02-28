<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\ChamberDetail;
use App\Models;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function chamber(){
    	return $this->belongsTo(ChamberDetail::class,'doctor_id');
    }
    public function compounderchamber(){
    	return $this->belongsTo(ChamberDetail::class,'chamber_id','id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class,'doctor_id');
    }






    
}
