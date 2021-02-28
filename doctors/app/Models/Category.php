<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   public function maincategory(){
    	return $this->belongsTo(Category::class,'p_id');
    }
}
